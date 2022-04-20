<?php
	include 'db_conn.php';
	$user_ID=$_POST['user_ID'];
	$insurance_plan=$_POST['insurance_plan'];
	$sql = "UPDATE `patient_insurance_plan` SET `insurance_plan`='$insurance_plan',WHERE patient_ID=$user_ID";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>