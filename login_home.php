<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/custom.css">
	  <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- Optional theme -->
    
		  <title>Warehouse Management</title>


</head>
<?php session_start(); 
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location: LOGIN.php");
}?>
<style>
<?php include 'comm.css';?>
body {	
	font-family: montserrat, arial, opensans;
	
}
.dropbtn {
    background-color: black;
    color: #e0e0e0;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width: 130px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: black;
}
</style>
<body>

   
  <nav class="navbar-001 navbar navbar-inverse " style="margin-bottom:0px;">
    <div class="container menu-001">
      <div class="row">
        <div class="col-xs-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>                        
                                  </button>
            <a  class="navbar-brand" href="index_login.php">Annapurna</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
				
                          <ul class="nav navbar-nav navbar-left">
           <!--   <li class="active"><a href="#">home</a></li>-->
             
			  <li><a href="booking.php">Booking </a> </li>
			  <li ><a href="navigation.php">Navigation</a></li>
			  <li><a href="static_storage.php">Storage</a></li>
			  <li><a href="Schedule.php">Schedule</a></li>
			  <li><a href="durability.php">Durability</a></li>
		      <li><a href="transport.php">Movement</a></li>
			    <li><a href="FAQ.php">FAQ</a></li>   
                  
                </ul>
				
              </li>
              
            </ul>
			 <ul class="nav navbar-nav navbar-right">
           <!--   <li class="active"><a href="#">home</a></li>-->
             
			  <li >
			  <div class="dropdown">
					<button class="dropbtn"><?php $user=$_SESSION['username']; echo ("$user");?>  </button>
					<div class="dropdown-content">
						<a href="profile.php">Profile</a>
						<a href="logout.php">Logout</a>
					</div>
				</div>
			   </li>
                </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>