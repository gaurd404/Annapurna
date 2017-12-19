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
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$House_No=$_POST['House_No'];
$Village_town=$_POST['Village_town'];
$Disrict=$_POST['District'];
$State=$_POST['State'];
$Email_address=$_POST['Email_address'];
$Aadhar_No=$_POST['Aadhar_No'];
$set_pass=$_POST['set A Password'];

$sql = "INSERT INTO My User (firstname, lastname, House_No,Village_No,Disrict,State,Email_address,Aadhar_No,set A password)
VALUES ('$firstname', '$lastname', '$House_No','$Village_town','$District','$State','$Email_address','$Aadhar_No','$set_pass')";
mysqli_close($conn);
?> 