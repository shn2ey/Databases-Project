<?php
require("db_conn.php");
session_start();

if (isset($_SESSION['user_ID'])) {
	$user_ID=$_SESSION['user_ID'];
	$query = "SELECT * from patient_insurance_plan where patient_ID='".$user_ID."'"; 
	$result = mysqli_query($conn, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);

	$status = "";
	if(isset($_POST['new']) && $_POST['new'] == 1)
	{
		$insurance_plan =$_SESSION['insurance_plan'];
		$update="UPDATE into patient_insurance_plan SET insurance_plan = '$insurance_plan' where patient_ID = '$user_ID'";
		mysqli_query($conn, $update) or die(mysqli_error());
		$status = "Record Updated Successfully. </br></br>
		<a href='MedicalPassport.php'>View Updated Record</a>";
		echo '<p style="color:#FF0000;">'.$status.'</p>';
	}else {
	?>
	<div>
	<form name="form" method="post" action=""> 
	<input type="hidden" name="new" value="1" />
	<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
	<p><input type="text" name="insurance_plan" placeholder="Enter New Insurance Plan" 
	required value="<?php echo $row['insurance_plan'];?>" /></p>
	<p><input name="submit" type="submit" value="Update" /></p>
	</form>
	<?php } 
	?>
	</div>
	</div>
	</body>
	</html>
	<?php } 
	?>
?>