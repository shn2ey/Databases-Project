<?php 

session_start(); 

require('db_conn.php');
include "db_conn.php";
require('functions.php');

$user_profile = null;


if (isset($_POST['user_ID']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $user_ID = validate($_POST['user_ID']);

    $pass = validate($_POST['password']);

    if (empty($user_ID)) {

        header("Location: index.php?error=Medical User ID is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{
      # Hash input password in the same way as stored password hash
      $pass = hash("sha256", $pass);
      ##check ALSO if session role is physician or patient and display home page accordingly
      $stmt = $conn->prepare("SELECT * FROM users WHERE user_ID=? AND pass=? LIMIT 1");
      $stmt->bind_param('is', $user_ID, $pass);
      $stmt->execute();
      $stmt->bind_result($user_ID, $first_name, $last_name, $address, $email, $birth_date, $pass);
      $stmt->store_result();
      if($stmt->num_rows == 1)  //To check if the row exists
      {
            if($stmt->fetch()) //fetching the contents of the row
            {
              echo "Logged in!";
              $_SESSION['user_ID'] = $user_ID;
              $_SESSION['first_name'] = $first_name;
              $_SESSION['last_name'] = $last_name;
              #check if the user is phycisican on patient and then redirect them to respective pages
              header("Location: home.php");
              exit();

            }else{

                header("Location: index.php?error=Incorect Medical User ID or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect Medical User ID or password");

            exit();
        }

      }

  }else{

    header("Location: index.php");

    exit();

}