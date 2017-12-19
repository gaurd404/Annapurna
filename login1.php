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
else
	echo "connected";
$username=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT Username, Password FROM login";
$result = mysqli_query($conn, $sql);
$c=0;
/*$hash = password_hash($pass);

if (password_verify('shri', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}*/
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if($username===$row["Username"] && $pass===$row["Password"])
		{	
	        session_start();
            $_SESSION['username'] = $username;
			$_SESSION['testcomplete'] = 'no';
			header('Location: index_login.php');
 			$c++;
		}	
	}	
	if($c==0)
	{
?>
<script>		
alert("Invalid credentials \n Please try again!");
window.location = 'LOGIN.php';
</script>	
<?php
	}
}
mysqli_close($conn);
?> 