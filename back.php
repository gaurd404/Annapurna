<?php
$page_title = "storage";
include('login_home.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Storage</title>
</head>
<style>
input[type="checkbox"]{
    -webkit-appearance: initial;
    appearance: initial;
    background: gray;
    width: 100px;
    height: 200px;
    border: none;
    background: gray;
    position: relative;
}
input[type="checkbox"]:checked {
    background: #006064;
}
input[type="checkbox"]:checked:after {
    /* Heres your symbol replacement - this is a tick in Unicode. */
    content: "\2713";
    color: #006064;
    /* The following positions my tick in the center, 
     * but you could just overlay the entire box
     * with a full after element with a background if you want to */
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    /*
     * If you want to fully change the check appearance, use the following:
     * content: " ";
     * width: 100%;
     * height: 100%;
     * background: blue;
     * top: 0;
     * left: 0;
     */
}
#right-block
{
	margin-left:100px;
}
#bigbox{
	margin-left:500px;
	width:450px;
	height:100px;
	padding-left:30px;
	padding-top:20px;
	font-size:20px;
}
#sbox1{
	width:40px;
	height:40px;
	background-color:#006064;
	border:1px solid #616161;
}
#sbox2{
	width:40px;
	height:40px;
	background-color:gray;
	border:1px solid #616161;
}
#sub
{
	margin-left:600px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
$user=$_SESSION['username'];
if(!isset($_POST['submit']))
{
$crop=$_POST['crop'];
$quantity=$_POST['quantity'];
$start_day=$_POST['dob'];
$end_date=$_POST['edob'];
$_SESSION['crop']=$crop;
$_SESSION['quantity']=$quantity;
$_SESSION['start_day']=$start_day;
$_SESSION['end_date']=$end_date;
$sqli="SELECT Crop_ID from crops where Crop_Name='$crop'";
$resulti = mysqli_query($conn, $sqli);
if (mysqli_num_rows($resulti) > 0)
{
	while($row = mysqli_fetch_assoc($resulti))
	{
		$crid=$row["Crop_ID"];
	}
}
$sql = "INSERT INTO booking_details (User_Id,Crop_ID,Quantity, Date_of_Booking, End_Date) VALUES ('$user','$crid','$quantity', '$start_day', '$end_date') "; 
$result = mysqli_query($conn, $sql);
?>
<form method="POST" action="storage.php">
<div id="bigbox">
<div id="sbox1" class="col-sm-3">
   
</div>
<div class="col-sm-3">
   Booked
</div>
<div id="sbox2" class="col-sm-3">
   
</div>
<div class="col-sm-3">
   Unbooked
</div>
</div>
<div id="right-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000000"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000001"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000002"></input>&nbsp  
<input type="checkbox" name="toppings[]" value="10000003"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000004"></input>
</div>
<div id="left-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000005"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000006"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000007"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000008"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000009"></input>
</div> 
<br><br>
<div id="right-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000010"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000011"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000012"></input>&nbsp  
<input type="checkbox" name="toppings[]" value="10000013"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000014"></input>
</div>
<div id="left-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000015"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000016"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000017"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000018"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000019"></input>
</div> 
<div id="right-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000020"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000021"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000022"></input>&nbsp  
<input type="checkbox" name="toppings[]" value="10000023"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000024"></input>
</div>
<div id="left-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000025" style="background-color:#006064;"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000026"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000027"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000028"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000029"></input>
</div> 
<div id="right-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000030"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000031"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000032"></input>&nbsp  
<input type="checkbox" name="toppings[]" value="10000033"></input>&nbsp 
<input type="checkbox" name="toppings[]" value="10000034"></input>
</div>
<div id="left-block" class="col-sm-5">
<input type="checkbox" name="toppings[]" value="10000035"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000036"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000037"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000038"></input>&nbsp
<input type="checkbox" name="toppings[]" value="10000039"></input>
</div> <br><br>
<div id="sub" class="col-sm-12">
<input type="submit" name="submit" value="Submit"/ >
</div>
</form>
<?php
}
else
{
foreach ($_POST['toppings'] as $t) {
$sqlu="UPDATE storage SET Status='OC' where Compartment_ID='$t'";
$result = mysqli_query($conn, $sqlu);
$sqlii = "INSERT INTO booking_details (Comp_Id) VALUES ('$t') where User_Id='$user'";
$resultii = mysqli_query($conn, $sqlii);
if($sqlii){
	echo "s";
}
else
	echo "n";
}
}
?>
</body>
</html>