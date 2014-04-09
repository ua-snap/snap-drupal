<?php

// use these in unit tests, as required
class Config {

	static public $database = array(
		'host' => 'localhost',
		'port' => '3306',
		'user' => 'snapwww',
		'pass' => 'password',
		'database' => 'snapwww'
	);
	
	/**
	* Points at an Apache-writable directory -- absolute filesystem path
	*/
	static public $temp = '/tmp';

	/**
	* Points at an Apache-readable directory that is public-facing -- absolute path
	*/
	static public $charts = '/var/www/html/charts';

	/**
	* Points at an Apache-readable directory that is public-facing
	*/
	static public $images = '/var/www/html/images/';

	// Code associated with the web site -- www.snap.uaf.edu is UA-3978613-1
	static public $googleAnalyticsToken = 'UA-3978613-3';

	// This URL should point to the service endpoint, and it's expected that the script using this
	// URL will postpend a numeric ID to invoke the required metadata.
	static public $geonetworkMetadataUrlBase = 'http://athena.snap.uaf.edu:8080/geonetwork/srv/en/metadata.show.embedded?id=';

}
?>
