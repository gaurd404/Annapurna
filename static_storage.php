<?php
$page_title = "storage";
include('login_home.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Storage</title>
</head>
<style>
<?php include 'comm.css';?>
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
/*input[type="checkbox"]:checked {
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
}*/
#f{
	margin-left:5px;
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

<form id="f">
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
</form>
</body>
</html>