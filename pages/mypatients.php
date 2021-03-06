<?php 

session_start();

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
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search your appointments by date">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                  <!-- make it display the appointments of that physician on that date, otherwise no appointments-->
                </div>
              </form>
              
            <select name="feelings" id="feelings" class="custom-select">
              <!-- for loop of patients that have the same physician -->
              <option value="general">Search your appointments by patient</option> <!-- change the values if needed-->
            </select>
            <div> <p> </p></div>
      <div class="sidebar-block">
             
              <h3 class="sidebar-title">My Patients</h3>
              <div class="blog-item">  
               <!-- for loop here to display the patients assigned to each doctor -->
                <div class="content">
                  <h5 class="post-title"><a href="DocViewMedicalPassport.php">Place holder for patient (will get from the database)</a></h5>
                  <div class="meta">
                    <!-- get dates from the database,
                    if the date of the appintment is after today, display it here -->
                    <a href="#"><span class="mai-calendar"></span> Age</a>
                  </div>
                </div>

              </div>

              <div class="blog-item">  
               <!-- for loop here to display the patients assigned to each doctor -->
                <div class="content">
                  <h5 class="post-title"><a href="DocViewMedicalPassport.php">Place holder for patient (will get from the database)</a></h5>
                  <div class="meta">
                    <!-- get dates from the database,
                    if the date of the appintment is after today, display it here -->
                    <a href="#"><span class="mai-calendar"></span> Age</a>
                  </div>
                </div>
              </div>
               
                <div class="blog-item">  
               <!-- for loop here to display the patients assigned to each doctor -->
                <div class="content">
                  <h5 class="post-title"><a href="DocViewMedicalPassport.php">Place holder for patient (will get from the database)</a></h5>
                  <div class="meta">
                    <!-- get dates from the database,
                    if the date of the appintment is after today, display it here -->
                    <a href="#"><span class="mai-calendar"></span> Age</a>
                  </div>
                </div>
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
