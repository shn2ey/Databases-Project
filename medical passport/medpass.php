<?php 
session_start();
require('db_conn.php');
include "edit.php";
//require("updatemedInsur.php");

// $updating = null;
// $list=getAllInsurance();

// if ($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//     if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Edit")
//     {  
//       $updating = getInsurance($_POST['updating']);
//     }
//     elseif (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Confirm update"){ 
//       updateInsurance($_POST['insurance_plan']);
//       $list=getAllInsurance();
//     //updateAddress($_POST['address']);
//     }
//   }
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "submit"){
//     $query = "SELECT * from patient_insurance_plan";
//     $result = mysqli_query($query);
//     $updateInsurance = "UPDATE patient_insurance_plan SET insurance_plan = 'updateInsurance()' WHERE patient_ID='$user_ID'";
//     $result1 = mysqli_query($updateInsurance);
//     $result1 = $_SESSION['insurance_plan'];

//   }
if (isset($_SESSION['user_ID'])) {

?>

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
            <li class="nav-item">
              <a class="nav-link" href="about.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="MedicalPassport.php">Medical Passport</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="checkin.php">Daily Check In</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="insurance.php">Insurance</a>
            </li>
            <li class="nav-item ">
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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medical Passport</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Your Medical Passport</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <div class="page-section">
    <div class="container">

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Patient ID: <?php echo $_SESSION['user_ID']; ?></p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <p> Name: <?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Age: </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <p> Email: <?php echo $_SESSION['email']; ?> <button type="submit" class="btn btn-primary">Edit</button> </p> <!-- # get from database  -->
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <p> Address: <?php echo $_SESSION['address']; ?>   
            <button type="submit" class="btn btn-primary">Edit</button> </p> <!-- # get from database  -->

          </div>
          <!-- <form method="post" -->>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <p> Insurance Plan: 
              <?php
                $count = 1;
                $user_ID = $_SESSION['user_ID'];
                $query = "SELECT * FROM patient_insurance_plan WHERE patient_ID='$user_ID'";
                $insurance_plan = $_SESSION['insurance_plan'];
                if ($result = mysqli_query($conn, $query)) {
                  while ($row = mysqli_fetch_array($result)) {
                      echo $row["insurance_plan"];
                    }
                  mysqli_free_result($result);
                }

                $sql = "SELECT * from patient_insurance_plan";
                $results= $conn->query($sql);
                if ($results->num_rows > 0) {
                  while($row2 = $results->fetch_assoc()) {
              ?>
              <a href="edit.php?id=<?php echo $row["user_ID"]; ?>">Edit</a>
              <?php $count++;  ?>
            <!-- <button type="submit" onClick = "updateInsurance()" name = "btnAction" class="btn btn-primary">Edit</button> -->
          <!--   <tr>
            <td>?=$row2['insurance_plan'];?></td>
            <td><button type="button" class="btn btn-primary update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
            data-id="?=$row2['insurance_plan'];?>">Edit</button></td>
            <input type="text" name="insurance_plan_modal" id="insurance_plan_modal" class="form-control-sm" required>
            </tr> -->
            <?php
          }
        }
            ?>
            <!-- <form action="">
            <button type="submit" onClick = "updateInsurance(this.value)"name = "btnAction" class="btn btn-primary">Edit</button>
            </form> -->
            
            <!-- <button type="button" onClick = "updateInsurance()" class="btn btn-primary" >Edit</button> -->
          <!-- </form> -->

          
            <!-- <input type="text" class = "form-control" name ="insurance_plan" required value="php if ($updating !=null) echo $updating[insurance_plan] ?>" />
            <input type="submit" value="Confirm update" name="btnAction" class="btn btn-dark" 
            title="confirm update" />
          </form>
          
          //foreach ($list as $insurance): ?>
          <form method="post">
        <input type="submit" value="Update" name="btnAction" class="btn btn-primary" />
        <input type="hidden" name="updating" value="//php echo $insurance['insurance_plan'] " />      
      </form>
     endforeach; ?> -->
          <!-- <button type="submit" class="btn btn-primary">Edit</button> -->
               
          </p>
          <!-- # get from database  -->
              <!-- <input type="text" class="form-control" name="insurance_plan" required 
              value="<
              // if ($updating!=null) echo $updating['insurance_plan'] 
              "
              />
              </p> # get from database  -->
              <!-- <form action= "MedicalPassport.php" method="post">
              <input type="submit" value = "Edit" name = "btnAction" class="btn btn-primary"/>
              <input type="hidden" name = "updating" value="echo $patient_insurance_plan['insurance_plan'] ?>"/>
              </form> -->



              
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <p> Medical Conditions: 
              <?php
                    $user_ID = $_SESSION['user_ID'];
          
                    $query = "SELECT * FROM patient_medical_condition WHERE patient_ID='$user_ID'";
                    $medical_condition = $_SESSION['medical_condition'];
                    if ($result = mysqli_query($conn, $query)) {
                      while ($row = mysqli_fetch_array($result)) {
                        echo $row["medical_condition"];
                      }
                      mysqli_free_result($result);
                    }    
            ?>
          </p>
        </div>
          
          <form action="exportToCSV.php">
          <input type="button" value="Download CSV File For My Appointments">
          </form>
          <!-- <button type="submit" class="btn btn-primary wow zoomIn">Export to CSV</button> -->
          
        </div>

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

<script>
function updateInsurance(insurance_plan){
  //alert("test");
  let insurance = prompt("Please enter your new insurance plan");
  var d = {user_ID = patient_ID, insurance_plan: insurance};
  $_POST('MedicalPassport.php', d);
  alert(insurance);
}
// function funcEdit(){  
//   var mysql = require('db_conn.php');

// var con = mysql.createConnection({
//   host: "localhost",
//   user: "tiba",
//   password: "tiba",
//   database: "tiba"
// });

// con.connect(function(err) {
//   if (err) throw err;
//   //Update the address field:
//   let insurance = prompt("Please enter your new insurance plan");
//   var sql = "UPDATE patient_insurance_plan SET insurance_plan = 'Medicare' WHERE insurance_plan = 'AETNA'";
//   con.query(sql, function (err, result) {
//     if (err) throw err;
//     console.log(result.affectedRows + " record(s) updated");
//   });
// });   
// }
</script>

<script>
$(document).ready(function() {
  $.ajax({
    url: "MedicalPassport.php",
    type: "POST",
    cache: false,
    success: function(dataResult){
      $('#table').html(dataResult); 
    }
  });
  $(function () {
    $('#update_country').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); /*Button that triggered the modal*/
      var insurance_plan = button.data('insurance_plan');
      var modal = $(this);
      modal.find('#insurance_plan_modal').val(insurance_plan);
      
    });
    });
  $(document).on("click", "#update_data", function() { 
    $.ajax({
      url: "update_ajax.php",
      type: "POST",
      cache: false,
      data:{
        insurance_plan: $('#insurance_plan_modal').val(),
      },
      success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          $('#update_country').modal().hide();
          alert('Data updated successfully !');
          location.reload();          
        }
      }
    });
  }); 
});
</script>
<?php 

}else{

     header("Location: index.php");

     exit();

   }
?>
