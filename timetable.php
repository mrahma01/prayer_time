<?php
	include("config.inc.php");
	
	$rows = Timetable::getCalendarToday();
	
	if ($rows !== false){
		$today_calender_str = Timetable::getCalendarTodayAsString($rows[0]);
	}else{
		$today_calender_str = "There is no timetable available at the moment.";
	}
		
	echo "<div id='timetable_today'>".$today_calender_str."</div>";
	