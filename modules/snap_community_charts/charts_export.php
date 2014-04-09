<?php

require_once 'src/Config.php';
require_once 'src/ChartsExporter.php';

try {
	
	$exporter = new ChartsExporter();
	$exporter->setProps($_POST);
	$exporter->export();
	
	$file = $exporter->getPathToFile();

	if (file_exists($file)) {
	    header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename='.basename($file));
	    header('Content-Transfer-Encoding: binary');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($file));
	    ob_clean();
	    flush();
	    readfile($file);

	} else {
		throw new Exception('Err6: File was not found: '.$file);
	}
    
} catch (SnapException $e) {

	header('HTTP/1.1 400 Bad Request ('.$e->getMessage().')', true, 400);

} catch (Exception $e) {

	header('HTTP/1.1 500 Server Error ('.$e->getMessage().')', true, 500);
}

exit;

?>