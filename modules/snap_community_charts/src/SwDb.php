<?php

require_once('src/Config.php');

// SnapWeb DB wrapper around PDO
class SwDb {
    
    static public function getInstance() {
        static $db;
        if(!isset($db)) {
            try {
                $db = new PDO('mysql:host='.Config::$database['host'].';port='.Config::$database['port'].';dbname='.Config::$database['database'], Config::$database['user'], Config::$database['pass'], array(
PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true ));
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return $db;
    }

    static public function getSchemaVersion()
    {
        try {
            $dbh = SwDb::getInstance();
            $sth = $dbh->query('SELECT `version` FROM `schema` LIMIT 1;');
            if($sth)
            {
                $res = $sth->fetch();
                return $res[0];
            } else {
                // If we can't determine the schema number, assume that it's a problem.
                return 'unknown/undefined';             
            }
        } catch ( Exception $e ) {
            return 'unknown/undefined';
        }
    }

    static public function setSchemaVersion($version)
    {

        try {
            $dbh = SwDb::getInstance();
            $dbh->beginTransaction();
            $sth = $dbh->prepare('UPDATE `schema` SET version=?');
            if( !$sth->execute(array($version))) {
                throw new Exception( implode($sth->errorInfo(),'') );
            }
            $dbh->commit();
        } catch (Exception $e) {
            echo "\nError while trying to set schema version: \n$e\n";
            $dbh->rollback();
        }
    }
}

?>
