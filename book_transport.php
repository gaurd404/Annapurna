<?php
SESSION_START();
$page_title = "book_transport";
include('server.php');
$user=$_SESSION['username'];
$sql="INSERT INTO book_transport(Vehicle_ID, Username) VALUES ('$vid','$user')";
$result=mysqli_query($conn,$sql);
?>