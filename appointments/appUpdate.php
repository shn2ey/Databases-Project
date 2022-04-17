<?php

include('db_conn.php')

function cancelAppt($appt_date_time)
{
	global $db;
	$query = "delete from data where appt_date_time=:appt_date_time";
	$statement = $db->prepare($query); 
	$statement->bindValue(':appt_date_time', $appt_date_time);
	$statement->execute();
	$statement->closeCursor();
}

?>