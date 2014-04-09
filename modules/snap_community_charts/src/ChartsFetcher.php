<?php

require_once 'SwDb.php';

class ChartsFetcher {
	public $community;
	public $type;
	public $scenario;
	public $daterange;
	private $dbh;

	public function __construct($community, $type = null, $scenario = null, $daterange = null) {
		$this->community = $community;
		$this->type = $type;
		$this->scenario = $scenario;
		$this->daterange = $daterange;
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

	static public function fetchChart($community, $dataset, $scenario, $variability) {

		// Juggle types
		$community = (int) $community;
		$dataset = (int) $dataset;
		$variability = (int) $variability;

		$yAxisTitle = (1 === $dataset) ? 'Temperature °F' : 'Total Precipitation (in)';
		switch ($scenario) {
			case 'a2':
				$subtitle = "Historical  PRISM and 5-Model Projected Average, High-Range Emissions (A2)";
				break;
			
			case 'b1':
				$subtitle = "Historical PRISM and 5-Model Projected Average, Low-Range Emissions (B1)";
				break;

			case 'a1b': //fallthru
			default:
				$subtitle = "Historical PRISM and 5-Model Projected Average, Mid-Range Emissions (A1B)";
				break;
		}

		$dbh = SwDb::getInstance();

		$sth = $dbh->prepare("SELECT * FROM communities WHERE `id`=:community");
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->bindParam(':community', $community, PDO::PARAM_INT);
		$sth->execute();
		$res = $sth->fetch();

		$title = (1 === $dataset) ? 'Average Monthly Temperature for ' : 'Average Monthly Precipitation for ';
		$title .= $res['community'].', '.$res['region'];

		$json = array(

			'variability' => $variability,
			'dataset' => $dataset,
			'scenario' => $scenario,
			'communityId' => $community,
			'communityName' => $res['community'],
			'communityRegion' => $res['region'],
			'communityCountry' => $res['country'],
			'yAxisTitle' => $yAxisTitle,
			'subtitle' => $subtitle,
			'title' => $title
		);

		$sth = $dbh->prepare("SELECT * FROM charts_data WHERE `communityId` = :community AND `type`=:dataset AND `scenario`=:scenario");

		$sth->bindParam(':community', $community, PDO::PARAM_INT);
		$sth->bindParam(':dataset', $dataset, PDO::PARAM_INT);
		$sth->bindParam(':scenario', $scenario, PDO::PARAM_STR);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();

		while( $row = $sth->fetch() ) {

			$json['series'][$row['daterange']] = array(
				(float) $row['jan'],
				(float) $row['feb'],
				(float) $row['mar'],
				(float) $row['apr'],
				(float) $row['may'],
				(float) $row['jun'],
				(float) $row['jul'],
				(float) $row['aug'],
				(float) $row['sep'],
				(float) $row['oct'],
				(float) $row['nov'],
				(float) $row['dec']
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
	SELECT LEAST(`Jan` - `JanSd`, `Feb` - `FebSd`, `Mar` - `MarSd`, `Apr` - `AprSd`, `Jun` - `JunSd`, `Jul` - `JulSd`, `Aug` - `AugSd`, `Sep` - `SepSd`, `Oct` - `OctSd`, `Nov` - `NovSd`, `Dec` - `DecSd`) minimum,
	GREATEST(`Jan` + `JanSd`, `Feb` + `FebSd`, `Mar` + `MarSd`, `Apr` + `AprSd`, `Jun` + `JunSd`, `Jul` + `JulSd`, `Aug` + `AugSd`, `Sep` + `SepSd`, `Oct` + `OctSd`, `Nov` + `NovSd`, `Dec` + `DecSd`)  maximum
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