<?php
session_start();
$page_title = "storage";
include('server.php');
$user=$_SESSION['username'];
$message=$_POST['user-message'];
$sql="INSERT INTO messages(Username, Message) VALUES ('$user','$message')";
$result=mysqli_query($conn,$sql);
?>