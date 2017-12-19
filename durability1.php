<?php

$page_title = "schedule_page";
include('login_home.php');


?>
<html>
<head>
<title>
</title>
</head>
<style>
<?php
include 'comm.css';


?>
body {
	font-family: montserrat, arial, opensans;	
}
table {
    font-family: montserrat, arial, opensans;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body>
        <table>
  <tr>
    <th>Crop Name</th>
    <th>No.of Days</th>
  </tr>
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


$inp=$_POST['selType'];
$sql = "SELECT Crop_Name,No_Of_days FROM crops as c where c.Crop_Name='$inp' "; 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
	    $ou1=$row["No_Of_days"];
		$ou2=$row["Crop_Name"];
		?>
				<tr>
		<td><?php echo "$ou2"?></td>
		<td><?php echo "$ou1"?></td>
		</tr>
		<?php
	}
}
?>
</table>
</body>
</html>