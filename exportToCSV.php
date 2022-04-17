<?php 

session_start();

include ('dbConfig.php'); 

if (isset($_SESSION['user_ID'])) {
   
   $query = $db->query("SELECT * FROM appointment NATURAL JOIN physician INNER JOIN users ON physician.physician_ID = users.user_ID WHERE patient_ID = $_SESSION['user_ID'] ORDER BY patient_ID ASC");
   
   if($query->num_rows > 0) {
		       $filename = "appointment_data.csv";
		       // File pointer
		       $f = fopen('php://memory', 'w');
		       // Column headers
		       $fields = array('Your ID', 'Physician First Name', 'Physician Last Name', 'Physician Specialty', 'Appointment Location', 'Physician Email');
		       $delimiter = ",";
		       fputcsv($f, $fields, $delimiter);
		       // Change line to csv + write
		       while($row = $query->fetch_assoc()){
				  $apptData = array($row['patient_ID'], $row['first_name'], $row['last_name'], $row['specialty'], $row['location'],  $row['email']);
				  fputcsv($f, $apptData, $delimiter);
			}
			fseek($f, 0);

			header('Content-Type: text/csv');
			header('Content-Disposition: attachment; filename="' . $filename . '";');
			fpassthru($f);
			echo "Your CSV file has been successfully downloaded.";
	}
    else {
    	 echo "You have no upcoming appointments. CSV file was not downloaded.";
     }
  exit;
}
 
?>
