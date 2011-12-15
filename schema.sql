CREATE TABLE IF NOT EXISTS timetable(
    timetable_id INT(3) PRIMARY KEY AUTO_INCREMENT,
    timetable_modified TIMESTAMP DEFAULT NOW(),
    d_date DATE,
    fajr_begins TIME,
    fajr_jamah TIME,
    sunrise TIME,
    zuhr_begins TIME,
    zuhr_jamah TIME,
    asr_mithl_1 TIME,
    asr_mithl_2 TIME,
    asr_jamah TIME,
    maghrib_begins TIME,
    maghrib_jamah TIME,
    isha_begins TIME,
    isha_jamah TIME
)
