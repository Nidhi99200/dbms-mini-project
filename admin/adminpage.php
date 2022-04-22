<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>

.strokeme {
  color: white;

  text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
             #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
}
    body {background-image: url("adminpage.jpg"); background-repeat: no-repeat; background-size: cover}
    h2{
      color:#FF00FF;
      font-family: Garamond, serif;
    }
    a{
      text-transform: uppercase;
    }
    </style>

</head>
<body>

<div class="container">
  <center>
    <div class="strokeme">
 <br><br><h2 style="font-size:50px;font-weight: bold;">Hello, Admin !!</h2>
 <h2 style="font-size:45px;font-weight: bold;">Click below to access details </h2><br>
  
  <div class="btn-group-vertical">
  	
  
  <a href="displayc.php" class="btn btn-info" role="button" style=" color:#0000FF; font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Customer Details</a>
  <br>
  <a href="display1.php" class="btn btn-info" role="button" style=" color: #0000FF;font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Event Details</a>
  <br>
  <a href="display.php" class="btn btn-info" role="button" style="color:#0000FF; font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Guest Details</a>
  <br>
  <a href="display2.php" class="btn btn-info" role="button" style=" color:#0000FF;font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Venue Details</a>
  <br>
  <a href="display3.php" class="btn btn-info" role="button" style="color:#0000FF;font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Booking Details</a><br>
  <a href="cb.php" class="btn btn-info" role="button" style="color:#0000FF;font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Customer Backup Details(Trigger)</a><br>
   <a href="tb.php" class="btn btn-info" role="button" style="color:#0000FF;font-size:25px;font-weight: bold;font-family: Georgia, serif; background-color:#FFD700 ;">Customer Budget Details(Stored Procedure)</a><br>
  </div>
</div>

</body>
</html>

