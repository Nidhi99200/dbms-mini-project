<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Client Side-Dashboard </title>
    <style>
    body {
 background-image: url("pink.jpg");

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
  font-size:25px;

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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   -->
<br>
<p style="font-size: 50px;text-align: center; color:#FF00FF ; font-weight: bold;font-family:Monotype Corsiva ; font-style: oblique;">Welcome, <?php echo $_SESSION['username']; ?> !</p> 

<form action="event.php" method="POST">
<div class="form-group">
<br><br><br><input type="image" name="eicon" src="eicon.png" style="border-radius: 28px"; width="150" height="150">
<div class="h1"><b> Book Event<b></div>
  </div>
</form>
<form action="guest.php" method="POST">
<div class="form-group">
 <br><input type="image" name="gicon" src="guest.png" style="border-radius: 28px"; width="150" height="150">
  <div class="h1"><b> Invite Guest<b></div>
  </div>
</form>

  </body>
</html>