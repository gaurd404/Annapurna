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
table {
    font-family: arial, sans-serif;
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
    <th>Booking_Date</th>
    <th>Booking_Till</th>
    <th>Compartment_ID</th>
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
$sql = "SELECT s.Comp_Id, s.Crop_ID, s.Date_Of_Booking, s.End_Date FROM crops AS c JOIN booking_details AS s on c.Crop_ID=s.Crop_ID where c.Crop_Name='$inp' "; 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
	    $ou1=$row["Crop_ID"];
		$ou2=$row["Date_Of_Booking"];
		$ou3=$row["End_Date"];
		$ou4=$row["Comp_Id"];
		?>
		<tr>
		<td><?php echo "$inp"?></td>
		<td><?php echo "$ou2"?></td>
		<td><?php echo "$ou3"?></td>
		<td><?php echo "$ou4"?></td>
		</tr>
		<?php
	}
}
?>
</table>
</body>
</html>