<html>
 <head>
     <style>
    table.full{
        width: 100%;
        border-collapse: separate;
    }
    table.full tr:nth-child(even) {background: #ebe6da}    
    table.full tr td{
        text-align: center;
        padding: 5px;
        border: 1px solid #ccc;
    }
    table.full tr td.jamah{
        background-color: #e1eafe;
    }
    table.full tr:hover {
        background-color: #e1eafe;
    }
    table.full tr.today{ 
        padding:2;
        font-weight: bold;
        background-color: #e1eafe; 
        border-collapse:collapse;
    }
    table.full tr.today td{ 
        border: 1px solid orange;
    }
    </style>
</head>
 <body>
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
		$months = array('January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October','November','December');
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

?>

</body>
</html>
