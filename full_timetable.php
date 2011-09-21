
<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edgware Islamic Cultural Trust (EICT)</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script type="text/javascript" src="js/date.js"></script>
  <script type="text/javascript" src="js/html5.js"></script>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
  <script type="text/javascript" src="js/Myriad_Pro_700.font.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  <script type="text/javascript" src="js/jquery.faded.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  
    <script type="text/javascript" src="eict.js" ></script> 
	
  <link rel="stylesheet" href="timetable.css" type="text/css"> 
  
</head>

<body id="page3" onLoad="myclock();">
  <div id="main">
  	<!-- header -->
    <header>
    	<h1><a href="index.php">Edgware <strong>Islamic</strong> Cultural <strong>Trust</strong></a></h1>
      <form id="ClockForm" action="">
        <fieldset>
          <input type="text" id="clock" />
        </fieldset>
      </form>
      <nav>
        <ul>
        	<li class="first"><a href="index.php">Home</a></li>
          <li><a href="about_us.html">About us</a></li>
          <li><a href="services.html">services</a></li>
          <li><a href="facilities.html">Facilities</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="donate_online.html">Donate Online</a></li>
          <li class="last"><a href="contacts.html">contacts</a></li>
        </ul>
      </nav>
    </header>
    <!-- .slider -->
    <div class="slider">
    	<div id="faded">
        <div class="rap">
        	<img src="images/slide4.jpg" alt="" width="952" height="321">
          <img src="images/slide1.jpg" alt="" width="952" height="321">
          <img src="images/slide2.jpg" alt="" width="952" height="321">
          <img src="images/slide3.jpg" alt="" width="952" height="321">
        </div>
      </div>
    </div>
    <!-- /.slider -->
    <div class="inside">
		
		<?php
			include("config.inc.php");
			//include("top.inc.php");
			
			
			$year = date("Y");
			
			$month = date("m");
			if(isset($_POST["month"])){
				$month = $_POST["month"];
			}
			
			$rows = Timetable::getMonthlyCalendar($month, $year);
			$timetable_content = Timetable::getTimetableAsString($rows, $month);
			
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
	        echo "From August 2011 Edgware Islamic Cultural Trust prayer times based on the <a href='http://www.eastlondonmosque.org.uk/unified'>Unified Prayer Timetable For London</a>";		
			echo "<div id='timetable_content'>".$timetable_content."</div>";
			
			//include("bot.inc.php");
		
		?>

    </div>
  </div>
  
  <!-- footer -->
<footer>
    <div class="container">
      <div class="wrapper">
      	<div class="fleft">Edgware Islamic Cultural Trust (EICT) 2010, UK registered charity registration number 1137809 &copy; 2010<br>
      	  <!-- {%FOOTER_LINK} -->
        </div>
<div class="fright">
        	<a href="#executive">Executive Committee</a>        </div>
      </div>
    </div>
	</footer>
</div>
</div>
  <!-- coded by ramzes -->
  <script type="text/javascript"> Cufon.now(); </script> 
</body>
</html>
