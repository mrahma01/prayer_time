<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
date_default_timezone_set('Europe/London');

define("DB_SERVER", "127.0.0.1");
define("DB_NAME", "eict");
define("DB_USER", "root");
define("DB_PASSWORD", "Shohag151");

define("SITE_ROOT", $_SERVER["DOCUMENT_ROOT"]);

include("Timetable.inc.php");
