<?php 

require('db_conn.php');
include('db_conn.php');

session_start();

if (isset($_SESSION['user_ID'])) {
  var_dump($_GET['id']);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>MedPort - Doc View Medical Passport</title>

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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medical Passport</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal"> Insert Name of Patient's Medical Passport</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <div class="page-section">
    <div class="container">

        <!-- button for assigning patient check in -->
        <button type="submit" class="btn btn-primary wow zoomIn">Assign Check In</button>

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Patient ID: </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <p> Name: </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Age: </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <p> Phone Number:</p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Address: </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <p> Insurance Plan: Edit</button> </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <p> Medical Conditions: <button type="submit" class="btn btn-primary">Edit</button> </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <p> Allergies: <button type="submit" class="btn btn-primary">Edit</button> </p> <!-- # get from database  -->
          </div>

          <?php  

          '<div>
            $patient_ID = $_COOKIE['patient_ID'];
            echo   '.$patient_ID.' ;
            </div>'

          ?>
          

        </div>
       

       <!-- button for exporting to pdf -->
        <button type="submit" class="btn btn-primary wow zoomIn">Export to PDF</button>

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