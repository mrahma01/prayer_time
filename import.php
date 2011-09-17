<?php
include("config.inc.php");
include("top.inc.php");

include("ExtractCSV.inc.php");

function getExt($filename) {
	return pathinfo($filename, PATHINFO_EXTENSION);
}

$dir = "csv";
/**
 * Open the csv directory and go through all files
 * import data within every files
 * The name of the file would be the date   
 */
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
        	if (getExt($file) == "csv"){
        		$date = basename($file, ".csv");
        		$date = str_replace("_", "-", $date);
				
        		# remove all existing data of the table for this month before inserting
        		$date_values = explode("-", $date);
        		Timetable::removeTimetable($date_values[0], $date_values[1]);
        		
        		# get CSV content as array
        		$csv = new ExtractCSV($dir."/".$file, $date);
        		$timetable = $csv->execute();
        		
        		# write the content to database
        		Timetable::writeArrayToDB($timetable);
        	}
        }
        closedir($dh);
    }
}

echo "All data imported succesfully!";

include("bot.inc.php");
