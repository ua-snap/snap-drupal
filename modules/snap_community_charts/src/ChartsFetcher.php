<?php

require_once 'SwDb.php';

class ChartsFetcher {
	public $community;
	public $type;
	public $scenario;
	public $daterange;
	public $baseline;
	public $resolution;
	private $dbh;

	public function __construct($community, $type = null, $scenario = null, $daterange = null, $baseline = null, $resolution = null) {
		$this->community = $community;
		$this->type = $type;
		$this->scenario = $scenario;
		$this->daterange = $daterange;
		$this->baseline = $baseline;
		$this->resolution = $resolution;
		$this->dbh = SwDb::getInstance();
	}

	public function fetch() {

		$sth = $this->dbh->prepare("SELECT * FROM communities, charts_data WHERE `communities`.`id` = ? AND `charts_data`.`type`=? AND `charts_data`.`scenario`=? AND `charts_data`.`daterange`=? AND `communities`.`id` = `charts_data`.`communityId` LIMIT 1");
		$sth->execute( array( $this->community, $this->type, $this->scenario, $this->daterange ) );
		return $sth->fetchAll();

	}

	static public function fetchCommunity($comm) {
		$dbh = SwDb::getInstance();
		$sth = $dbh->prepare('SELECT * FROM `communities` WHERE id=?');
		$sth->execute(array($comm));
		return $sth->fetch();
	}

	static public function fetchCommunitiesAsJson() {
		$dbh = SwDb::getInstance();

		// rename columns to match jQueryUI autocompleter plugin data source
		$sth = $dbh->prepare('SELECT `id`, CONCAT(`community`, ", ", `region`) AS `community` FROM communities ORDER BY `community` ASC');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();

		// loop to cast to UTF8 - there are some oddball characters in the data, this prevents goof-ups.
		$arr = array();
		while( $row = $sth->fetch() ) {
			$arr[] = array(
				'value' => utf8_encode($row['id']),
				'label' => utf8_encode($row['community'])
			);
		}
		return json_encode($arr);
	}

	static public function fetchChart($community, $dataset, $scenario, $variability, $baseline, $resolution = null) {

		// Juggle types
		$community = (int) $community;
		$dataset = (int) $dataset;
		$variability = (int) $variability;

		$yAxisTitle = (1 === $dataset) ? 'Temperature °F' : 'Total Precipitation (in)';
		switch ($baseline) {
			case 'prism':
				$baselinetext = "Historical PRISM";
        $resolution = "2km";
				break;
			case 'cru32':
			default:
			  $baselinetext = "Historical CRU 3.2";
        $resolution = "10min";
				break;
		}
		switch ($resolution) {
			case '2km':
				$resolutiontext = "at 2km resolution";
				break;
			case '10min':
			default:
				$resolutiontext = "at 10min resolution";
				break;
		}
		switch ($scenario) {
			case 'rcp85':
				$subtitle = $baselinetext ." and 5-Model Projected Average ". $resolutiontext . ", High-Range Emissions (RCP 8.5)";
				break;

			case 'rcp45':
				$subtitle = $baselinetext . " and 5-Model Projected Average ". $resolutiontext . ", Low-Range Emissions (RCP 4.5)";
				break;

			case 'rcp60': //fallthru
			default:
				$subtitle = $baselinetext . " and 5-Model Projected Average ". $resolutiontext .", Mid-Range Emissions (RCP 6.0)";
				break;
		}

		$dbh = SwDb::getInstance();

		$sth = $dbh->prepare("SELECT * FROM communities WHERE `id`=:community");
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->bindParam(':community', $community, PDO::PARAM_INT);
		$sth->execute();
		$res = $sth->fetch();

		$title = (1 === $dataset) ? 'Average Monthly Temperature for ' : 'Average Monthly Precipitation for ';
		$title .= utf8_encode($res['community']).', '.$res['region'];

		$json = array(

			'variability' => $variability,
			'dataset' => $dataset,
			'scenario' => $scenario,
			'communityId' => $community,
			'baseline' => $baseline,
			'resolution' => $resolution,
			'communityName' => utf8_encode($res['community']),
			'communityRegion' => $res['region'],
			'yAxisTitle' => $yAxisTitle,
			'subtitle' => $subtitle,
			'title' => $title
		);

		$sth = $dbh->prepare("SELECT * FROM charts_data WHERE `communityId` = :community AND `type`=:dataset AND (`scenario`=:scenario OR `scenario`=:baseline) AND `resolution`=:resolution");

		$sth->bindParam(':community', $community, PDO::PARAM_INT);
		$sth->bindParam(':dataset', $dataset, PDO::PARAM_INT);
		$sth->bindParam(':scenario', $scenario, PDO::PARAM_STR);
		$sth->bindParam(':baseline', $baseline, PDO::PARAM_STR);
		$sth->bindParam(':resolution', $resolution, PDO::PARAM_STR);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();

		while( $row = $sth->fetch() ) {

			$json['series'][$row['daterange']] = array(
				(float) $row['janMean'],
				(float) $row['febMean'],
				(float) $row['marMean'],
				(float) $row['aprMean'],
				(float) $row['mayMean'],
				(float) $row['junMean'],
				(float) $row['julMean'],
				(float) $row['augMean'],
				(float) $row['sepMean'],
				(float) $row['octMean'],
				(float) $row['novMean'],
				(float) $row['decMean']
			);

			$json['seriesMins'][$row['daterange']] = array(
				(float) $row['janMin'],
				(float) $row['febMin'],
				(float) $row['marMin'],
				(float) $row['aprMin'],
				(float) $row['mayMin'],
				(float) $row['junMin'],
				(float) $row['julMin'],
				(float) $row['augMin'],
				(float) $row['sepMin'],
				(float) $row['octMin'],
				(float) $row['novMin'],
				(float) $row['decMin']
			);

			$json['seriesMaxs'][$row['daterange']] = array(
				(float) $row['janMax'],
				(float) $row['febMax'],
				(float) $row['marMax'],
				(float) $row['aprMax'],
				(float) $row['mayMax'],
				(float) $row['junMax'],
				(float) $row['julMax'],
				(float) $row['augMax'],
				(float) $row['sepMax'],
				(float) $row['octMax'],
				(float) $row['novMax'],
				(float) $row['decMax']
			);

			$json['standardDeviations'][$row['daterange']] = array(
				(float) $row['janSd'],
				(float) $row['febSd'],
				(float) $row['marSd'],
				(float) $row['aprSd'],
				(float) $row['maySd'],
				(float) $row['junSd'],
				(float) $row['julSd'],
				(float) $row['augSd'],
				(float) $row['sepSd'],
				(float) $row['octSd'],
				(float) $row['novSd'],
				(float) $row['decSd']
			);
		}

		$sth = $dbh->prepare(<<<sql

SELECT MIN(minimum) minimum, MAX(maximum) maximum FROM
	(
	SELECT LEAST(`JanMin`, `FebMin`, `MarMin`, `AprMin`, `JunMin`, `JulMin`, `AugMin`, `SepMin`, `OctMin`, `NovMin`, `DecMin`) minimum,
	GREATEST(`JanMax`, `FebMax`, `MarMax`, `AprMax`, `JunMax`, `JulMax`, `AugMax`, `SepMax`, `OctMax`, `NovMax`, `DecMax`)  maximum
	FROM charts_data
	WHERE `communityId` = :community AND `type` = :dataset
	) AS `values`

sql
);
		$sth->bindParam(':community', $community, PDO::PARAM_INT);
		$sth->bindParam(':dataset', $dataset, PDO::PARAM_INT);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$row = $sth->fetch();

		$json['minimum'] = (float) $row['minimum'];
		$json['maximum'] = (float) $row['maximum'];

		return json_encode($json);

	}

}

?>
