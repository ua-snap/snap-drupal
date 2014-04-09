<?php

require_once 'src/Exceptions.php';
require_once 'src/SwDb.php';
require_once 'src/Config.php';

/**
* Given POST requests, generates a chart in the desired format in the
* location specified in Config::$charts directory (absolute path, must be Apache readable).
* Also needs the Config::$temp directory for a scratch writing location for the initial SVG file.
*/
class ChartsExporter {

	// Maps the incoming type request to the command fragment to run,
	// which is interpolated via sprintf() with the appropriate temp files / static overlay files.
	public $featureMap = array(

		'png/lowres' => array(
			'mime' => 'image/png',
			// source SVG, temp PNG => composite lowres gif + temp PNG => output
			// %s %s %s %s %s => Config::$temp/[[md5sum]].svg Config::$temp/[[filename.png.src]] Config::$images Config::$temp[[filename.png]] Config::$charts/filename.png
			'command' => 'convert %s -quality 90 -resize 800 %s; composite %s/charts_overlay_snap_acronym_lowres.gif -gravity NorthWest -geometry +9+299 %s %s',
			'extension' => '_lowres.png'
		),
		'png/hires' => array(
			'mime' => 'image/png',
			// source SVG, temp PNG => composite hires gif + temp PNG => output
			// %s %s %s %s %s => Config::$temp/[[md5sum]].svg Config::$temp/[[filename.png.src]] Config::$images Config::$temp[[filename.png]] Config::$charts/filename.png
			'command' => 'convert -density 600 %s %s; composite %s/charts_overlay_snap_acronym_hires.gif -gravity Northwest -geometry +50+2895 %s %s',
			'extension' => '_hires.png'
	  	),
	  	'svg' => array(
		  	'mime' => 'image/svg+xml',
		  	'command' => 'cp %s %s', // just move the SVG file and rename it as appropriate
		  	'extension' => '.svg'
		)
	
	);

	public $communityId;
	public $dataset;
	public $scenario;
	public $variability;
	public $type;
	public $svg;
	private $community = array();

	/**
	* The point of having this explicit step -- not in the constructor -- is to facilitate testing and to make
	* the script bail loudly if it doesn't get required HTTP params (i.e. don't try and
	* generate anything if provided faulty input)
	*/
	public function setProps($params) {
		if(
			!isset($params['communityId']) ||
			!isset($params['dataset']) ||
			!isset($params['variability']) ||
			!isset($params['scenario']) ||
			!isset($params['svg']) ||
			!isset($params['type'])
		) {
			throw new SnapException('Parameters not set in ChartsExporter->setProps');
		}

		$this->communityId = $params['communityId'];
		$this->dataset = $params['dataset'] == 1 ? 'temperature' : 'precipitation';
		$this->scenario = $params['scenario'];
		$this->variability = $params['variability'] == 1 ? '_var' : '';
		$this->type = $params['type'];
		$this->svg = $params['svg'];
	}

	/**
	* returns assoc array of two items: 'community' and 'region'
	*/
	public function getCommunity() {
		$dbh = SwDb::getInstance();
		$sth = $dbh->prepare("SELECT `community`, `region` FROM communities WHERE id = :id");
		$sth->execute( array( 'id' => $this->communityId ));
		$this->community = $sth->fetch(PDO::FETCH_ASSOC);
		return $this->community;
	}

	/**
	* Do a DB lookup to fetch the correct community name.
	*/
	public function getFilenameBase() {
		
		if(empty($this->community)) { $this->getCommunity(); }

		// TODO: may need to enrich this further to protect from special characters
		$base = 'SNAP_Chart_'.$this->community['community'].'_'.$this->community['region'].'_'.$this->dataset.'_'.$this->scenario.$this->variability;

		$base = preg_replace('/\s+/', '_', $base); // remove spaces
		$base = str_replace("'",'', $base); // remove quotes
		return $base;
	}

	public function export() {
		
		// Is the file already in the cache?
		if( false === $this->fileExistsInCache()) {

			// Generate it.
			$result = $this->writeFileToCache();
			if($result) {
				throw new Exception('Err1: '.$result);
			}
		}

	}

	public function writeFileToCache() {

		// Write the SVG to temporary output
		$tempSvg = Config::$temp . '/' . md5($this->svg) . '.svg';
		$chart = Config::$charts . '/' . $this->getFilename();
		$chartTemp = Config::$temp . '/' . $this->getFilenameBase() . '-tmp-' . $this->featureMap[$this->type]['extension'];

		try {

			// If, for whatever reason, the md5'd SVG exists even though the file isn't in cache, reuse the SVG -- but
			// if not, then write it out.
			if( false === @file_exists($tempSvg)) {
				if( !file_put_contents($tempSvg, $this->svg) ) {
					throw new Exception('Err2: Failed to write temporary SVG');
				}
			}
			
			switch($this->type) {
				case 'png/hires': // fallthru
				case 'png/lowres':
					$command = sprintf($this->featureMap[$this->type]['command'], $tempSvg, $chartTemp, Config::$images, $chartTemp, $chart);
					break;
				
				case 'svg':
					$command = sprintf($this->featureMap[$this->type]['command'], $tempSvg, $chart);
					break;

				default:
					throw new Exception('Err3: cannot determine type of image processing command to run');
			}

			$result = exec( $command );

			@unlink($tempSvg);
			@unlink($chartTemp);
			return $result;
			
		} catch (Exception $e) {
			
			$error = '';
			try {
				// Cleanup
				if(isset($this->handle) && is_resource($this->handle)) {
					fclose($this->handle);
				}

				if(file_exists($tempSvg)) {
					@unlink($tempSvg);
				}

			} catch (Exception $err) {
				$error = 'Could not cleanup temp files.';
			}

			// bubble
			throw new Exception('Err5: '.$error .'/'. $e->getMessage());
		}
	}

	public function getFilename() {
		return $this->getFilenameBase() . $this->featureMap[$this->type]['extension'];
	}

	public function fileExistsInCache() {
		return @file_exists( $this->getPathToFile() );
	}

	public function getPathToFile() {
		return Config::$charts . '/' . $this->getFilename();
	}

	public function getMimeType() {
		return $this->featureMap[$this->type]['mime'];
	}

}

?>