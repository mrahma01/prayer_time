<?php
	include("config.inc.php");
	include("top.inc.php");
	
	
	$year = date("Y");
	
	$month = date("m");
	if(isset($_POST["month"])){
		$month = $_POST["month"];
	}
	
	$rows = Timetable::getMonthlyCalendar($month, $year);
	$timetable_content = Timetable::getTimetableAsString($rows);
	
	function getMonths($month){
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 
						'August', 'September', 'October','November','December');
		$i = 1;
		$options = "";
		foreach($months as $month_name){
			$selected = "";
			if($i == intval($month)){
				$selected = " selected='selected'";
			}
			$options .= "<option value='{$i}' {$selected}>{$month_name}</option>";	
			$i++;
		}
		
		return $options;
	}
	
?>
	<form id="full_calender" name="full_calender" >
		Month: 
		<select id="month" name="month" >
			<?php echo getMonths($month);?>
		</select>
		<div id="loading" style="display:block;clear:both;margin-top:5px;margin-bottom:5px;"></div>
		
	</form>
<?php 	
	
	echo "<div id='timetable_content'>".$timetable_content."</div>";
	
	include("bot.inc.php");