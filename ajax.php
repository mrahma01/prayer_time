<?php

include("config.inc.php");

$func = $_REQUEST["func"];
switch($func){
	case 'get_timetable':
		$month = $_REQUEST["month"] ;
		$rows = Timetable::getMonthlyCalendar($month);
		$timetable_content = Timetable::getTimetableAsString($rows);
		echo $timetable_content;
		break;
};