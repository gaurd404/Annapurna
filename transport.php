<?php
$page_title = "booking_page";
include('login_home.php');
include('server.php');
$sql="select * from transport";
$result=mysqli_query($conn,$sql);
?>
    <div class="container">
	    <section>
		        <div class="page-header" id="features">
				    <h2>Carrier Vehicles</h2>
		        </div>
			<?php
			if(mysqli_num_rows($result)>0)
			{	
				while($row=mysqli_fetch_assoc($result))
				{
					$image=$row["Image"];
					$model=$row["Vehicle_Model"];
					$capacity=$row["Capacity"];
					$id=$row["Vehicle_Id"];
			?>
			<div class="row">
					   <div class="col-sm-6" >
					       <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';?>	
					            </div>
								<div class="col-sm-6">
					                 <h3><?php echo "$model";?></h3><br>
						              <h4>Capactiy: <?php echo "$capacity";?>KG</h4><br>
									  <h4>Charge: Rs 50/KM</h4>
						               <br>
							           <div class="container">
                                 <a href="transport.php?book=<?php $_SESSION['id']=$id; echo $id;?>"><button type="button" onClick="location.href='bookingnext.php'" class="btn btn-danger">Book Now</button></a>
                            </div>
                     </div>
            </div><br><br>
			<?php
							}
			}
			if(isset($_GET['book']))
			{
				$id=$_GET['book'];
				echo $id;
				$sql="UPDATE transport SET Status='NA' where Vehicle_Id='$id'";
				$result=mysqli_query($conn,$sql);
				?>
				<script>
				alert("Transport has been booked");
				</script>
				<?php
			}	
			?>	
 <hr>
					
					</section>
					</div>