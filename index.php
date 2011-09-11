<?php
	include("config.inc.php");
	
	include("top.inc.php");
	
?>


<?PHP	
	$row = Timetable::getCalendarToday();
	if($row !== false){
		var_dump($row[0]);
	}
	
	include("bot.inc.php");
	
?>