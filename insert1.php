<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" type="text/css" href="hstyle.css">
	<style>
     body {
          background-image: url("pink.jpg");
          background-repeat: no-repeat;
  background-size: cover;
    }
.form-group{
            margin:0 auto;
            width:210px;
      top:100px;
        }
  .h1{
    
  text-transform: uppercase;
  color:  #0000FF;
  font-size:19px;
  font-style: oblique;
  font-weight: bold;

   } 
   .center {
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
   
</style>
</head>

<body>
	 <ul class="nav justify-content-center">
   
     <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 25px; color: black; background-color:#FFD700; font-weight: bold;font-family:Georgia;">Customer Dashboard</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="venue.php" style="font-size: 25px;color: black; font-weight: bold;  font-family:Georgia;">Book Venue</a>
      <a class="dropdown-item" href="booking_details.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Fill Booking details</a>

    </div>
  </li>
     
    <li class="nav-item">
        <a class="nav-link"href="logout.php" style="font-size: 25px;color: black; font-weight: bold; background-color: #C0C0C0; font-family:Georgia;">Logout</a>
      </li>   
  </ul>

		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "ems");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)

		$etype = $_REQUEST['etype'];
		$name = $_REQUEST['name'];
		$cid = $_REQUEST['cid'];
		
		
		// Performing insert query execution
		// here our table name is guest
		$sql = "INSERT INTO `event` (etype,name,cid) VALUES ('$etype',
			'$name','$cid')";
		
		if(mysqli_query($conn, $sql)){
			

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<br>
<p style="font-size: 25px;text-align: center; color:#FF00FF ; font-weight: bold;font-family:Monotype Corsiva ; font-style: oblique;">Event details stored succesfully.<br>
 Now click below to book venue and fill booking details !!</p> 

		<form action="venue.php" method="POST">
<div class="form-group">
  <br><br><input type="image" name="gicon" src="venue.png" style="border-radius: 28px"; width="150" height="150">
  <div class="h1"><b>Book Venue<b></div>
  </div>
</form>
<br>
<form action="booking_details.php" method="POST">
<div class="form-group">
 <br><br><input type="image" name="gicon" src="booking.jpg" style="border-radius: 28px"; width="150" height="150">
  <div class="h1"><b> Booking Details<b></div>
  </div>
</form>

</body>

</html>
