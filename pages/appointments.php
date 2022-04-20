<?php 

session_start();
require('db_conn.php');


if (isset($_SESSION['user_ID'])) {

                  
                    

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>MedPort Insurance</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Med</span>-Port</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="MedicalPassport.php">Medical Passport</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="checkin.php">Daily Check In</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="appointments.php">Appointments</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="logout.php">Logout</a>
            </li>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-section pt-5">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="physical-360w.webp" alt="">
            </div>
            <div class="post-meta">
            </div>
            <h2 class="post-title h1">My Complete History</h2>
            <div class="post-content">

              <!-- input from the database the previous appointments -->
              <!-- example 1 -->
              <!-- <div class="sidebar-block"> -->
                <!-- <div class="content"> -->

                    
                      

                      <?php

                      $user_ID = $_SESSION['user_ID'];
          
                      $query = "SELECT * FROM appointment JOIN users ON appointment.physician_ID = users.user_ID WHERE patient_ID='$user_ID' AND appt_date_time < NOW()";
                      $physician_ID = $_SESSION['physician_ID'];
                      $appt_date_time = $_SESSION['appt_date_time'];
                      $satisfaction_rating = $_SESSION['satisfaction_rating'];
                      $physician_notes = $_SESSION['physician_notes'];
                      $first_name = $_SESSION['first_name'];
                      $last_name = $_SESSION['last_name'];


                      if ($result = mysqli_query($conn, $query) ) {
                        while ($row = mysqli_fetch_array($result)) {

                          $date = $row["appt_date_time"];
                          $firstname = $row["first_name"];
                          $lastname = $row["last_name"];
                          $notes = $row["physician_notes"];
                          $rating = $row["satisfaction_rating"];



                          echo 
                          '<div class="sidebar-block"> 

                            <h5> <a> Your physician: Dr. '.$firstname.' '.$lastname.' </h5>
                            Date of appointment: '.$date.' </a> 

                            <p> Notes from your doctor: '.$notes.' </p>

                            <p> Your satisfaction rating: '.$rating.' </p>

                           </div>';



                            
                        }

                         // <label for="subject">I feel that my doctor listened to me and addressed my needs.</label>
                            // <select name="feelings" id="feelings" class="custom-select" >
                            //   <option value="5">I strongly agree</option> 
                            //   <option value="4">I slightly agree</option>
                            //   <option value="3">I feel neutral</option>
                            //   <option value="2">I slightly disagree</option>
                            //   <option value="1">I strongly disagree</option>
                            // </select>
                            // <button type="submit" class="btn btn-primary">Submit</button> 

                        // <!-- satisfaction rating -->
                        // <!-- if has not already posted their satisfaction rating, display this -->
                        // <!-- if they already did their satisfaction rating, display that -->

                        mysqli_free_result($result);
                      }
                      ?>

                        
                      
                          
                            
                              <!-- followiing line only display if satisfaction rating already exists -->
                          
                    
                    
                    
                  <!-- </div> -->
              <!-- </div> -->
              <!-- example 2 -->
              
          
            </div>
           
          </article> <!-- .blog-details -->

         
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            
            <div class="sidebar-block">
              <h3 class="sidebar-title">Your Medical Conditions</h3>
              <ul class="categories">
                <!-- for loop
                  if person has medical conditions, put them here 
                    otherwise, say no medical conditions -->
                   <?php

                    $user_ID = $_SESSION['user_ID'];
          
                    $query = "SELECT * FROM patient_medical_condition WHERE patient_ID='$user_ID'";
                    
                    $medical_condition = $_SESSION['medical_condition'];

                    if ($result = mysqli_query($conn, $query)) {
                      while ($row = mysqli_fetch_array($result)) {

                        $condition = $row["medical_condition"];
                        echo '<li><a> '.$condition.' </a> <li>';

                      }

                      
                      mysqli_free_result($result);
                    }
                    ?>



              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Upcoming Appointments</h3>
              


                    <?php

                      $user_ID = $_SESSION['user_ID'];
          
                      $query = "SELECT * FROM appointment JOIN users ON appointment.physician_ID = users.user_ID WHERE patient_ID='$user_ID' AND appt_date_time > NOW()"; 
                      // AND appt_date_time > GETDATE() this breaks the page! but i only want to display when its later than the current date
                      $physician_ID = $_SESSION['physician_ID'];
                      $appt_date_time = $_SESSION['appt_date_time'];
                      $satisfaction_rating = $_SESSION['satisfaction_rating'];
                      $physician_notes = $_SESSION['physician_notes'];
                      $first_name = $_SESSION['first_name'];
                      $last_name = $_SESSION['last_name'];


                      if ($result = mysqli_query($conn, $query) ) {
                        while ($row = mysqli_fetch_array($result)) {

                          $date = $row["appt_date_time"];
                          $firstname = $row["first_name"];
                          $lastname = $row["last_name"];
                          $notes = $row["physician_notes"];



                          echo 
                          '<div class="blog-item"> 

                            <h5> <a> With Dr. '.$firstname.' '.$lastname.' </h5>
                            <span class="mai-calendar"></span> '.$date.' </a> 

                            <button type="submit" class="btn btn-primary wow zoomIn">Cancel</button>

                           </div>';
          
                        }
                        mysqli_free_result($result);
                      }
                  ?>

            </div>


            <!-- if the patient has a check in assigned, display this block, otherwise do not display -->
            <?php

                      $user_ID = $_SESSION['user_ID'];
          
                      $query = "SELECT * FROM assign JOIN daily_check_in ON assign.check_in_number = daily_check_in.check_in_number WHERE patient_ID='$user_ID' "; 
                      // AND date_taken > GETDATE() this breaks the page! but i only want to display when its later than the current date
                      $check_in_number = $_SESSION['check_in_number'];
      


                      if ($result = mysqli_query($conn, $query) ) {
                          $firstname = $row["first_name"];
                          $lastname = $row["last_name"];

                          echo 
                          '<div class="sidebar-block"> 

                          <h3 class="sidebar-title"> You were assigned you a daily check in.</h3>
                          <p> </p>
                          <h5 class="post-title"><a href="checkin.php">Complete Daily Check In</a></h5>
                          </div>';

          
                        mysqli_free_result($result);
                      }
                ?>
            
              



          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
<div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using the MedPort Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">

    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>