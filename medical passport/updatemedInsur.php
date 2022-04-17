<?php
include ("db_conn.php");

$db = $conn;
$table="patient_medical_condition";
$column=['patient_id', 'medical_condition']
$fetchData2 = fetch_data($db, $table, $column);

function fetch_data($db, $table, $column){
	if(empty($db)){
	 	$msg= "Database connection error";
	 }
	elseif (empty($column) || !is_array($column)) {
	 	$msg="columns Name must be defined in an indexed array";
	}
	elseif(empty($table)){
	  	$msg= "Table Name is empty";
	}
	else{
		$columnName = implode(", ", $column);
		$query = "SELECT ".$columnName." FROM $table"." ORDER BY id DESC";
		$result = $db->query($query);
		if($result== true){ 
			if ($result->num_rows > 0) {
			    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
			    $msg= $row;
			} 
		 	else {
		    	$msg= "No Data Found"; 
		 	}
		}
		else{
		 	$msg= mysqli_error($db);
		}
	}
	return $msg;
	}
}

function updateInsurance($insurance_plan)
{
	global $db;
	$query = "update data2 set insurance_plan=:insurance_plan";
	$statement = $db->prepare($query); 
	$statement->bindValue(':insurance_plan', $insurance_plan);
	$statement->execute();
	$statement->closeCursor();
}


?>
