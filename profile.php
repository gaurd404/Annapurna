

<?php
$page_title = "Home page";
include('login_home.php');

?>
<style>
<?php include 'profile.css'; ?>

body{
	background-image:url(imp.jpg);
	background-size:cover;
}
</style>


<?php
include('server.php');
$user=$_SESSION['username'];
$sql="select * from user_details where Username='$user'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
 <form id="msform">
  
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Profile Details</h2>
	<hr>
   
 <B style="font-size:15px;">Name:</B> <span style="display:inline-block; width: 5px;"></span><?php echo ($row["First_Name"].$row["Last_Name"]);?>
	
   <input type="button" onClick="location.href='bookingnext.php'" name="next" class="next action-button" value="Edit" /></a><br>
 <B>Email:</B> <span style="display:inline-block; width: 5px;"></span> <?php echo ($row["Email"]);?>
	
   <input type="button" onClick="location.href='bookingnext.php'" name="next" class="next action-button" value="Edit" /><br>
 <B>Phone:</B>   <span style="display:inline-block; width: 5px;"></span> <?php echo ($row["Mobile_No"]);?>
	
   <input type="button" onClick="location.href='bookingnext.php'" name="next" class="next action-button" value="Edit" /><br>
  </fieldset>
 </form>
</body>

</html>