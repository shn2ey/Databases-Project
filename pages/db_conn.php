<?php

/** S22, PHP (on GCP, local XAMPP, or CS server) connect to MySQL (on local XAMPP) **/
$username = 'cs4750user';
$password = 'Saroon98';
$host = 'localhost';
$dbname = 'cs4750user';
$dsn = "mysql:host=localhost;dbname=cs4750user";  
////////////////////////////////////////////


/** connect to the database **/
try 
{
   $db = new PDO($dsn, $username, $password);
   $conn = mysqli_connect($host, $username, $password, $dbname);
   
   // dispaly a message to let us know that we are connected to the database 
   echo "<p>You are connected to the database --- dsn=$dsn, user=$username, pwd=$password </p>";
}
catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
{
   // Call a method from any object, use the object's name followed by -> and then method's name
   // All exception objects provide a getMessage() method that returns the error message 
   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       // handle any type of exception
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}

?>
