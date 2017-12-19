<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
for($x=10000001;$x<=10000040;$x++)
{
	$sql = "INSERT INTO storage (Compartment_ID, Capacity, Status) VALUES ('$x', '50',  'UC')";
	$result = mysqli_query($conn,$sql);
}
?>