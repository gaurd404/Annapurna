<html>
<head>
<title>
Booking
</title>
</head>
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


$crop=$_POST['crop'];
$quantity=$_POST['quantity'];
$start_day=$_POST['dob'];
$end_date=$_POST['edob'];
$cr=$_POST['cr'];
$sql = "INSERT INTO booking_details (Crop_ID,Quantity, Date_of_Booking, End_Date) VALUES ('102','$quantity', '$start_day', '$end_date') "; 
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
</body>
</html>