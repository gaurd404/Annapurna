<?php

$page_title = "booking_page";
include('header.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Schedule</title></head>
<style>
#schedule-container
{
    margin-left:500px;
	margin-top:200px;
	height:100px;
	width: 300px;
	padding-top:10px;
	padding-left:10px;
}
#form{
    padding-left:15px;
	padding-bottom:15px;
}
#y{
       padding-left:10px;
	padding-bottom:5px;
	padding-top:5px;
	width:100px;
	font-size:20px;
}
input[type=submit]
{
   	padding-bottom:5px;
}
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Warehouse";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_GET['submit'])) {
$crop=$_POST['crop'];
$quantity=$_POST['quantity'];
$start_day=$_POST['dob'];
$end_date=$_POST['edob'];
$sql = "INSERT INTO booking_details (Crop_ID,Quantity, Date_of_Booking, End_Date) VALUES ('$crop','$quantity', '$start_day', '$end_date') "; 
$result = mysqli_query($conn, $sql);
?>
<form id="msform" action="next.php" method="GET">  
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">CROP DETAILS</h2>
    <input type="text" name="cr" placeholder="name" />
   
   <input type="submit" name="submit" value="Submit" />
  </fieldset>
</form>
<?php
}
else{
$cr=$_GET['cr'];
echo "$cr";
mysqli_close($conn);
}
?>
<h2></h2>
<div id="schedule-container">
<!--<form id="form" method="post" action="schedule.php">
<select id="y" name="selType">
<option  type="text" value="Wheat" style="width:30px;">Wheat</option>
<option value="Rice">Rice</option>
</select></p>
<input type="submit" / >
</form>-->
</div>
</body>
</html>