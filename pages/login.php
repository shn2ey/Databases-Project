<?php 

session_start(); 

require('db_conn.php');
include "db_conn.php";

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
    	## HASH PASSWORD HERE 
    	$pass = hash("sha256", $pass);

    	##check ALSO if session role is physician or patient and display home page accordingly
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_ID=? AND pass=? LIMIT 1");
    	$stmt->bind_param('is', $user_ID, $pass);
    	$stmt->execute();
    	$stmt->bind_result($user_ID, $first_name, $last_name, $address, $email, $birth_date, $pass);
    	$stmt->store_result();
    	#$stmt->close();

   		if($stmt->num_rows == 1)  //To check if the row exists
  		{
            if($stmt->fetch()) //fetching the contents of the row
            {
            	echo "Logged in!";
            	$_SESSION['user_ID'] = $user_ID;
            	$_SESSION['first_name'] = $first_name;
            	$_SESSION['last_name'] = $last_name;
                $_SESSION['address'] = $address;
                $_SESSION['email'] = $email;
                $_SESSION['birth_date'] = $birth_date;
                // header("Location: about.php"); 


			     $stmt->close();
            	
            	#check if the user is phycisican on patient and then redirect them to respective pages
            	$stmt2 = $conn->prepare("SELECT physician_ID FROM physician WHERE physician_ID=?");
    			$stmt2->bind_param('i', $user_ID);
    			$stmt2->execute();
    			$stmt2->store_result();


                


            	

		   		if($stmt2->num_rows == 1) { //To check if the row exists --> then it is a patient
                    // if($stmt->fetch()) //fetching the contents of the row
                    // {
                    //     $_SESSION['avg_rating'] = $avg_rating;
                    //     $_SESSION['speciality'] = $speciality;
                    // }
		   			header("Location: mypatients.php");
                    exit();
				} else {   //they are a physician
					header("Location: about.php");
                        // $stmt3 = $conn->prepare("SELECT physician_notes FROM appointment WHERE patient_ID =?");
                        // $stmt3->bind_param('i', $user_ID);
                        // $stmt2->execute();
                        // $stmt2->store_result();

                        // if($stmt3->fetch()) //fetching the contents of the row
                        // {
                            
                        //     $_SESSION['date'] = $appt_date_time;
                        //     $_SESSION['satisfaction'] = $satisfaction_rating;
                        //     $_SESSION['notes'] = $physician_notes;
                        //     $_SESSION['practice'] = $location;
					exit();
				}



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