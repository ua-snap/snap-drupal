<?php

/**
* This file accumulates exceptions that are to be thrown on the server-side as required.
*/

/**
* SnapExceptions are throw instead of the standard Exception class to facilitate testing with PhpUnit.
*/
class SnapException extends Exception {}

/**
* HttpExceptions are used when an HTTP exception needs to be generated.
*/
class HttpException extends Exception {}

?>