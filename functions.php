<?php

####THIS IS JUST A PLACEHOLDER - NOT ACTUALLY USED ANYWHERE
function randomFunc($user_name, $password) {
	global $conn; 
	$query = "SELECT * FROM users";

	$statement = $db->prepare($query);
	$statement->execute();

	$results = $statement->fetch(); 
	$statement->closeCursor();

	return $results;  
}