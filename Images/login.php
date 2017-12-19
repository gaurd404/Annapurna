<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
	echo "connected";
$User_Name=$_POST['User_Name'];
$password=$_POST['password'];
$sql = "SELECT EmailId, password FROM users";
$result = mysqli_query($conn, $sql);
$c=0;

mysqli_close($conn);
?> 