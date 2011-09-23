<?php
ini_set('display_errors','Off');
	/**
	 * Processing CSV file
	 * 
	 * Handles CSV file
	 * @category	Development
	 * @package 	test
	 * @author		Anowar Hossain <anowar999@yahoo.com>
	 *
	 */
	class ExtractCSV {
		/**
		 * @var array
		 */
		private $data = array();
		
		/**
		 * @var array
		 */
		private $fields = array('d_date',
								'fajr_begins',
								'fajr_jamah',
								'sunrise',
								'zuhr_begins',
								'zuhr_jamah',
								'asr_mithl_1',
								'asr_mithl_2',
								'asr_jamah',
								'maghrib_begins',
								'maghrib_jamah',
								'isha_begins',
								'isha_jamah'
		
							);
		/**
		 * @var str
		 */
		private $file_name = "";
		/**
		 * @var str
		 */
		private $default_date = "2011-09-01";
		
		/**
		 * Constructor
		 * @param	str	$file_name
		 */
		public function __construct ($file_name, $date=false) {
			$this->file_name = $file_name;
			if($date !== false){
				$this->default_date = $date;
			}
		}
		
		/**
		 * 
		 * Process the CSV file and return as array
		 * @return arrays
		 */
		public function execute(){
			
			$fp = fopen($this->file_name,"r");
			$count = 0;
			while ($line = fgetcsv($fp, 1000)) {
				if($count > 0){
					$line = $this->setForColumnName($line);
				}
				$this->data[] = $line;
				$count++;
			}
			fclose($fp);
			return $this->data;						
		}
		
		/**
		 * 
		 * add column name to the array
		 * @param array $line
		 */
		private function setForColumnName($line){
			$row = array();
			$i = 0;
			foreach($line as $column){
				$day = $line[0];
				$date_values = explode("-", $this->default_date);
				$this->default_date = $date_values[0]."-".$date_values[1]."-".$day;
				
				$line[0] = $this->default_date;
				
				$row[$this->fields[$i]] = $line[$i];
				$i++;
			}
			return $row;
		}
	}
?>
