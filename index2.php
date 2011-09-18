<?php
	include("config.inc.php");
	
	include("top.inc.php");
	
?>


<?PHP	
	$row = Timetable::getCalendarToday();
	
	include("bot.inc.php");
	
?>
