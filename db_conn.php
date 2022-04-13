<?php
$sname= "localhost";

$uname= "cs4750user";

$password = "Saroon98";

$db_name = "cs4750user";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}