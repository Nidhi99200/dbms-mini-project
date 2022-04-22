<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    body {
 background-image: url("party.png");

  background-size: cover;
}
.form-group{
			margin:0 auto;
			width:210px;
      top:100px;
		}
  .h1{
    
  text-transform: uppercase;
  color: white;
  font-size:19px;
  font-style: oblique;
  font-weight: bold;

   } 
   .center {
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
   
</style>
</head>
<body>
    <div class="form">
        <p style="font-size: 25px; color: white; font-weight: normal;font-family:Georgia;">Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p style="font-size: 25px; font-weight: normal;color: white;font-family:Georgia;">You are in customer dashboard page.</p>
        <p style="font-size: 25px; font-weight: normal; color:blue; font-family:Georgia;"><a href="user.php">Click here to book a event and invite guests</a></p>
        <p style="font-size: 25px; font-weight: normal;font-family:Georgia;"><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
