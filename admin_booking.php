<?php
$page_title = "storage";
include('admin_home.php');
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
    <th>Booking_No</th>
    <th>Username</th>
    <th>Compartment_ID</th>
    <th>Crop</th>
	<th>Quantity</th>
	<th>Booking_Date</th>
	<th>Booking_till</th>
  </tr>
<?php
$sql="SELECT * FROM booking_details";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
        $ou1=$row["Booking_No"];
		$ou2=$row["User_Id"];
		$ou3=$row["Comp_Id"];
		$ou4=$row["Crop_ID"];
		$ou5=$row["Quantity"];
		$ou6=$row["Date_of_Booking"];
		$ou7=$row["End_Date"];
		?>
		<tr>
		<td><?php echo "$ou1"?></td>
		<td><?php echo "$ou2"?></td>
		<td><?php echo "$ou3"?></td>
		<td><?php echo "$ou4"?></td>
		<td><?php echo "$ou5"?></td>
		<td><?php echo "$ou6"?></td>
		<td><?php echo "$ou7"?></td>
		</tr>
		<?php
	}
}
?>
</body>
</html>