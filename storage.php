<?php
$page_title = "storage";
include('login_home.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Storage</title>
</head>
<style>
body {
	
	
	font-family: montserrat, arial, opensans;
	
}
input[type="checkbox"]{
    -webkit-appearance: initial;
    appearance: initial;
    background: gray;
    width: 100px;
    height: 100px;
    border: none;
    background: gray;
    position: relative;
}
input[type="checkbox"]:checked {
    background: #b9f6ca;
}
input[type="checkbox"]:checked:after {
    /* Heres your symbol replacement - this is a tick in Unicode. */
    content: "\2713";
    color: #b9f6ca;

    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}
#right-block
{
	margin-left:100px;
}
#bigbox{
	margin-left:500px;
	width:750px;
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
#sbox3{
	width:40px;
	height:40px;
	background-color:#b9f6ca;
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
if(!isset($_POST['submit']))
{
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
$crop=$_POST['crop'];
$quantity=$_POST['quantity'];
$start_day=$_POST['dob'];
$end_date=$_POST['edob'];
$_SESSION['crop']=$crop;
$_SESSION['quantity']=$quantity;
$_SESSION['start_day']=$start_day;
$_SESSION['end_date']=$end_date;
$_SESSION['conn']=$conn;
?>
<div id="bigbox">
<div id="sbox3" class="col-sm-2">
   
</div>
<div class="col-sm-2">
   Selected
</div>
<div id="sbox1" class="col-sm-2">
   
</div>
<div class="col-sm-2">
   Booked
</div>
<div id="sbox2" class="col-sm-2">
   
</div>
<div class="col-sm-2">
   Unbooked
</div>
</div>
<form method="POST" action="storage.php">
<?php
	$sql = "SELECT Compartment_ID FROM storage where Status='OC'"; 
    $result = mysqli_query($conn, $sql);
	$c=0;
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$match[$c]=$row["Compartment_ID"];
			$c++;
		}
	}	
function check($a,$count,$match)
{
	for($x=0;$x<$count;$x++)
	{
		if($match[$x]==$a)
			return 1;
	}
	return 0;
}
$counter=10000001;
while($counter<=10000040)
{ 
    $count=0;
?>
	<div id="right-block" class="col-sm-5">
<?php
	while($count<5)
	{
		
		if(check($counter,$c,$match)==1)
		{
?>
			<input type="checkbox" name="compartments[]" value="<?php echo ("$counter");?>" style="background-color:#006064;"></input>&nbsp
<?php
		}
		else{
?>	
		    <input type="checkbox" name="compartments[]" value="<?php echo ("$counter");?>"></input>&nbsp		
<?php
		}
				$count++;
		$counter++;
	} 	
	$count=0;
?>
	</div>
    <div id="left-block" class="col-sm-5">
<?php
	while($count<5)
	{
		if(check($counter,$c,$match)==1)
		{
?>
			<input type="checkbox" name="compartments[]" value="<?php echo ("$counter");?>" style="background-color:#006064;"></input>&nbsp
<?php
		}
		else{
?>	
		    <input type="checkbox" name="compartments[]" value="<?php echo ("$counter");?>"></input>&nbsp		
<?php
		}
		$count++;
		$counter++;
	}
	$count=0;
?>
	</div>
<?php
}
?>	
<div id="sub" class="col-sm-12">
<input type="submit" name="submit" value="Submit"/ >
</div>
</form>
<?php
}
else
{
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Warehouse";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
$crop=$_SESSION['crop'];
$quantity=$_SESSION['quantity'];
$start_day=$_SESSION['start_day'];
$end_date=$_SESSION['end_date'];
$sqli="SELECT Crop_ID from crops where Crop_Name='$crop'";
$resulti = mysqli_query($conn, $sqli);
if (mysqli_num_rows($resulti) > 0)
{
	while($row = mysqli_fetch_assoc($resulti))
	{
		$crid=$row["Crop_ID"];
	}
}
foreach ($_POST['compartments'] as $t){
$sql = "INSERT INTO booking_details (User_Id,Crop_ID,Quantity, Comp_Id,Date_of_Booking, End_Date) VALUES ('$user','$crid','$quantity','$t', '$start_day', '$end_date') "; 
$result = mysqli_query($conn, $sql);	
$sqlu="UPDATE storage SET Status='OC' where Compartment_ID='$t'";
$resultu = mysqli_query($conn, $sqlu);
}?>
<script>
alert("Your Booking has been done");
window.location = 'booking.php';
</script>
<?php
}
?>
</body>
</html>