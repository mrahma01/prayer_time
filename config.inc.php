<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
//echo 'Current PHP version: ' . phpversion();
date_default_timezone_set('Europe/London');

define("DB_SERVER", "localhost:/tmp/mysql5.sock");
define("DB_NAME", "db383351816");
define("DB_USER", "dbo383351816");
define("DB_PASSWORD", "4youme6");

define("SITE_ROOT", $_SERVER["DOCUMENT_ROOT"]);

include("Timetable.inc.php");
