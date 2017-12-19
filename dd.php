<html>
<head>
<title>
</title>
</head>
<body>
<form action="dd.php" method="POST">
<?php
$in=$_POST['in'];
for($i=1;$i<=$in;$i++)
{ 
?>
<input type="text" name="in" placeholder="Enter"/><br>
<?php
}
?>
</form>
</body>
</html>