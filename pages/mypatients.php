
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

  <title>MedPort My Patients</title>

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
            <li class="nav-item active">
              <a class="nav-link" href="mypatients.php">View My Patients</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="docappointments.php">Manage Appointments</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="docbio.php">Edit Personal Information</a>
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
          <h3 class="sidebar-title">Search</h3>
              <form action="" method="POST">
                <div class="form-group">
                  <form action ="" method="POST">
                  <input type="text" class="form-control" name="appt_date_time" placeholder="Search your appointments by date"/> <br/>

                  
                  <input type="submit" name="search" class="btn btn-primary"> </button>
                  <!-- make it display the appointments of that physician on that date, otherwise no appointments-->
                </div>
              </form>


              <?php
                  $user_ID = $_SESSION['user_ID'];

                  if(isset($_POST['search'])){
                    $date = $_POST['date'];
                    $query = "SELECT * FROM appointment WHERE physician_ID='$user_ID' AND appt_date_time='$date'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                      ?>
                          $id = $row["patient_ID"]; 
                          $firstname = $row["first_name"];
                          $lastname = $row["last_name"];
                          $notes = $row["physician_notes"];
                          $age = $row["patient_age"];


                          $_COOKIE['patient_ID'] = $patient_ID;

                          echo 
                          '<div class="blog-item"> 
                          <div class="content">

                          <h5 class="post-title"><a href="DocViewMedicalPassport.php?patient_ID='.$id.'">'.$firstname.' '.$lastname.'</a></h5>







                            <p>  '.$age.' year old</p>
                      <?php
                    }

                  }
                  

                  ?>

              
            <select name="feelings" id="feelings" class="custom-select">
              <!-- for loop of patients that have the same physician -->
              <option value="general">Search your appointments by patient</option> <!-- change the values if needed-->
            </select>
            <div> <p> </p></div>
      <div class="sidebar-block">
             
              <h3 class="sidebar-title">My Patients</h3>



              <?php

                      $user_ID = $_SESSION['user_ID'];
          
                      $query = "SELECT * FROM appointment JOIN users ON appointment.patient_ID = users.user_ID JOIN patient ON appointment.patient_ID = patient.patient_ID WHERE physician_ID='$user_ID'";
                      $patient_ID = $_SESSION['patient_ID'];
                      $appt_date_time = $_SESSION['appt_date_time'];
                      $physician_notes = $_SESSION['physician_notes'];
                      $first_name = $_SESSION['first_name'];
                      $last_name = $_SESSION['last_name'];
                      $last_name = $_SESSION['last_name'];


                      if ($result = mysqli_query($conn, $query) ) {
                        while ($row = mysqli_fetch_array($result)) {

                          // $date = $row["appt_date_time"];
                          $id = $row["patient_ID"]; 
                          $firstname = $row["first_name"];
                          $lastname = $row["last_name"];
                          $notes = $row["physician_notes"];
                          $age = $row["patient_age"];


                          $_COOKIE['patient_ID'] = $patient_ID;

                          echo 
                          '<div class="blog-item"> 
                          <div class="content">

                          <h5 class="post-title"><a href="DocViewMedicalPassport.php?patient_ID='.$id.'">'.$firstname.' '.$lastname.'</a></h5>







                            <p>  '.$age.' year old</p>




                            </div>
                           </div>';


                            
                        }


                        mysqli_free_result($result);
                      }
                      ?>            
                  <div class="meta">
                  
        
                  </div>


              
              </div>
            </div>

      <div class="row">
        
        
              
            </div>
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
