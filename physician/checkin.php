<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>MedPort Daily Check-In</title>

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
              <a class="nav-link" href="about.html">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="MedicalPassport.html">Medical Passport</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="checkin.html">Daily Check In</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="insurance.html">Insurance</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="appointments.html">Appointments</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Logout</a>
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
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daily Check In</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Daily Check In</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h5> Please submit once daily. </h5>

      <form class="contact-form mt-5">
        <div class="row mb-3">
          <label> </label>
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="feeling good">Today I am feeling good</label>
            <select name="feelings" id="feelings" class="custom-select">
              <option value="general">I strongly agree</option> <!-- change the values if needed-->
              <option value="cardiology">I slightly agree</option>
              <option value="dental">I feel neutral</option>
              <option value="neurology">I slightly disagree</option>
              <option value="orthopaedics">I strongly disagree</option>
            </select>
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">I have more severe symptoms</label>
            <select name="feelings" id="feelings" class="custom-select">
              <option value="general">I strongly agree</option> <!-- change the values if needed-->
              <option value="cardiology">I slightly agree</option>
              <option value="dental">I feel neutral</option>
              <option value="neurology">I slightly disagree</option>
              <option value="orthopaedics">I strongly disagree</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Generally, I think I will be okay.</label>
            <select name="feelings" id="feelings" class="custom-select">
              <option value="general">I strongly agree</option> <!-- change the values if needed-->
              <option value="cardiology">I slightly agree</option>
              <option value="dental">I feel neutral</option>
              <option value="neurology">I slightly disagree</option>
              <option value="orthopaedics">I strongly disagree</option>
            </select>
          </div>
        </div>
        <input type="submit" class="btn btn-primary wow zoomIn" />


      </form>
    </div>
  </div>



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