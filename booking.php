<?php
$page_title = "booking_page";
include('login_home.php'); ?>
<style>
<?php include 'booking.css'; ?>	
</style>
<!-- multistep form -->
<form id="msform" action="storage.php" method="POST">  
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">CROP DETAILS</h2>
    Enter the crop:
<select id="y" name="crop">
<option  type="text" value="Wheat" style="width:30px;">Wheat</option>
<option value="Rice">Rice</option>
<option value="Rajma">Rajma</option>
<option value="Sweet Corn">Sweet Corn</option>
<option value="Yellow Pea">Yellow Pea</option>  
<option value="Green Pea">Green Pea</option>  
<option value="Coffee">Coffee</option>  
<option value="Bajjara">Bajjara</option> 
<option value="Mustard">Mustard</option>
<option value="Tumeric">Turmeric</option>
</select><br><br>
	  <input type="text" name="quantity" placeholder="Quantity" autocomplete="off"/>
	  
       <input  name="dob" placeholder="Date_Booking" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="off"/>
	   
   <input  name="edob" placeholder="Booking_Till" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="off"/>
   <input type="submit"/>
  </fieldset>
</form>
  


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/npm.js"></script>
</body>

</html>