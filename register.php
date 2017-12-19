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
$username=$_POST['user_name'];
$pass=$_POST['password'];
$sql = "SELECT EmailId, password FROM users";
$result = mysqli_query($conn, $sql);
$c=0;
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if($username===$row["EmailId"] && $pass===$row["password"])
		{	
	        echo "You are logged in";
			$c=1;
		}	
	}	
	if($c==0)
		echo "Invalid credentials";
}
mysqli_close($conn);
?> 