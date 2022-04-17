<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>MedPort - Medical Passport</title>

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
            <li class="nav-item ">
              <a class="nav-link" href="mypatients.html">View My Patients</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="docappointments.html">Manage Appointments</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="docbio.html">Edit Personal Information</a>
            </li>
            <li class="nav-item ">
              <a class="btn btn-primary ml-lg-3" href="#">Logout</a>
            </li>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <?php
  require('updateMed.php')
  require('updatemedInsur.php')
    if(is_array($fetchData)){
      foreach($fetchData as $data){}}
    elseif(is_array($fetchData2)){
      foreach($fetchData as $data2){}}
    else if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Edit"){
      if ($_POST['specialty']){
        updateSpecialty($_POST['specialty'])
      }
    }
  ?>
  <div class="page-section">
    <div class="container">

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Physician ID: 
              <?php
            if (isset($_POST['id'])){
                 $mysqli = new mysqli("localhost", "test", "test", "test");
                if ($mysqli->connect_errno) {
                  print "Failed to connect to MySQL: " . $mysqli->connect_error;
                 }
                $id = $mysqli->real_escape_string($_POST['id']);
                $res = $mysqli->query("SELECT physician_id FROM users WHERE id = $id");
                $row = $res->fetch_assoc();
                print '<p>' . html_entities($row['username']) .'</p>';
              }
            ?>
            </p> 
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <p> Name: 
              <td> <?php echo $data['first_name'] && $data['last_name']??''; ?> </td> 
            </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Age: </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <form action="docBio.php" method="post">
            <p> Phone Number: 
              <input type="submit" name ='btnAction' value="Edit" class="btn btn-primary" />
              <input type="hidden" value=<?php echo $data['phone_number'] ??''; ?> />
            </p>
          </form>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <form action="docBio.php" method="post">
              <p> Address:
              <input type="submit" name = 'btnAction' value="Edit" class="btn btn-primary" />
              <input type="hidden" value=<?php echo $data['address'] ??''; ?> />
            < /p>
          </form>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <form action="docBio.php" method="post">
            <p> Insurance Plan: 
              <input type="submit" name = 'btnAction' value="Edit" class="btn btn-primary" />
              <input type="hidden" value=<?php echo $data2['insurance_plan'] ??''; ?> />
            </form>
            </p>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <form action="docBio.php" method="post">
            <p> Medical Conditions: 
              <?php
              //echo $data3['medical_condition']  ??''
              $result = mysql_query("SELECT medical_conditions FROM patient_medical_condition");
              while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                printf("%s", $row["medical_condition"]);
              }

              mysql_free_result($result);
              ?>
              <input type="submit" name = 'btnAction' value="Edit" class="btn btn-primary" />
              <input type="hidden" value= <?php mysql_free_result($result)?> />

            </form>
              </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
           <form action="docBio.php" method="post">
            <p> Specialty: 
              <input type="submit" name = 'btnAction' value="Edit" class="btn btn-primary" />
              <input type="hidden" value=<?php echo $data2['specialty'] ??''; ?> />
            </form>
            </p>
          </div>
          </div>
          
        </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->
  

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