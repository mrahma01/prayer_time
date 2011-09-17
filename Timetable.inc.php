<?php
	include("fn.db.inc.php");
	db_connect();

	/**
	 * Timetable model file
	 * 
	 * @category	Development
	 * @author		Anowar Hossain <anowar999@yahoo.com>
	 *
	 */
	class Timetable {
		
		protected $timeyable_id;
		
		protected $table_name = 'timetable';
		/**
		 * @var array
		 */
		private $fields = array(
								'd_date' => '',
								'fajr_begins' => '',
								'fajr_jamah' => '',
								'sunrise' => '',
								'zuhr_begins' => '',
								'zuhr_jamah' => '',
								'asr_mithl_1' => '',
								'asr_mithl_2' => '',
								'asr_jamah' => '',
								'maghrib_begins' => '',
								'maghrib_jamah' => '',
								'isha_begins' => '',
								'isha_jamah' => ''
		
							);
		
		/**
		 * Constructor
		 * @param	str	$file_name
		 */
		public function __construct ($timeyable_id = false) {
			if($timeyable_id !== false){
				$this->timeyable_id = $timeyable_id;
			}
		}
		
		/**
		 * 
		 * Insert rows(data specified in the $this->fields) array 
		 */
		public function insert(){
			$sql = "INSERT INTO {$this->table_name} (";
			$count = 1;
			foreach($this->fields as $key => $val){
				$sql .= $key;
				if ($count < count($this->fields)){
					 $sql .= ",";
				}	
				$count++;
			}
			$sql .= ") VALUEs(";
			
			$count = 1;
			foreach($this->fields as $key => $val){
				$sql .= "'".$val."'";
				if ($count < count($this->fields)){
					 $sql .= ",";
				}	
				$count++;
			}
			$sql .= ")";
			
			$result = db_query($sql);
		}	
		
		/**
		 * Enter description here ...
		 * @param array $fields
		 */
		public function setFields($fields){
			$this->fields = $fields;
		}
		
		/**
		 * 
		 * remove all existing timetable of specified dates ...
		 * @param int $year
		 * @param int $month
		 */
		public static function removeTimetable($year, $month){
			$start_date = $year."-".$month."-1";
			$end_date = $year."-".$month."-31";
			$sql = "DELETE FROM timetable WHERE d_date BETWEEN '{$start_date}' AND '{$end_date}'";
			$result = db_query($sql);
		}
		
		/**
		 * Write all data to the database
		 * @param array $rows
		 */
		public static function writeArrayToDB($rows){
			# remove the top row, the top row is the name of the column
			array_shift($rows);
			foreach($rows as $row){
				$timetable = new Timetable();
				$timetable->setFields($row);
				$timetable->insert();
			}			
		}
		
		/**
		 * 
		 * Get the monthly calendar.
		 * @param int $year
		 * @param int $month
		 */
		public static function getMonthlyCalendar($month, $year = false){
			if($year === false){
				$year = date("Y");
			}
			$start_date = $year."-".$month."-1";
			$end_date = $year."-".$month."-31";
			$sql = "SELECT * FROM timetable WHERE d_date BETWEEN '{$start_date}' AND '{$end_date}'";
			return db_query_return_as_array($sql);			
		}
		/**
		 * 
		 * Get the today's calendar.
		 * @param int $year
		 * @param int $month
		 */
		public static function getCalendarToday(){
			$sql = "SELECT * FROM timetable
					WHERE	d_date = CURDATE() LIMIT 1";
			return db_query_return_as_array($sql);			
		}	

		public static function getTimetableAsString($rows){
			$str = "No data found for your selected month.";
			# there is at least one rows
			if($rows !== false){
                $i = 1;
				$str = "<table class='full' ><tr><td></td><td colspan='3'>Fajr</td><td colspan='2'>Zuhr</td><td colspan='3'>Asr</td><td colspan='2'>Maghrib</td><td colspan='2'>Isha</td></tr><tr>";
				$str .= "<td>Day</td><td>Begins</td><td>Jamah</td><td>Sunrise</td><td>Begins</td><td>Jamah</td><td>Mithl1</td><td>Mithl2</td>
						<td>Jamah</td><td>Begins</td><td>Jamah</td><td>Begins</td><td>Jamah</td>";
				$str .= "</tr>";
				foreach($rows as $row){
					$str .= "<tr ".self::getClass($i).">";
					
					$str .= "<td>$i</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["fajr_begins"])."</td>";
					$str .= "<td class='jamah'>".self::formatHourAndMinuteOnly($row["fajr_jamah"])."</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["sunrise"])."</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["zuhr_begins"])."</td>";
					$str .= "<td class='jamah'>".self::formatHourAndMinuteOnly($row["zuhr_jamah"])."</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["asr_mithl_1"])."</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["asr_mithl_2"])."</td>";
					$str .= "<td class='jamah'>".self::formatHourAndMinuteOnly($row["asr_jamah"])."</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["maghrib_begins"])."</td>";
					$str .= "<td class='jamah'>".self::formatHourAndMinuteOnly($row["maghrib_jamah"])."</td>";
					$str .= "<td>".self::formatHourAndMinuteOnly($row["isha_begins"])."</td>";
					$str .= "<td class='jamah'>".self::formatHourAndMinuteOnly($row["isha_jamah"])."</td>";
					// strftime("%V,%G,%Y", strtotime("12/28/2002"))
					$str .= "</tr>";
                    $i++;
				}
			}		
			return $str;	
		}
		/**
		 * 
		 * Enter description here ...
		 * @param $strVal
		 */
		private function formatHourAndMinuteOnly($strVal){
			return substr($strVal, 0, 5);
		}
        /*
        * static function to return a css class to highlight the current date
        */
        public static function getClass($day){
            $today = getdate();
            if ($day === $today['mday'])
                return "class = today";
        }
	}
?>
