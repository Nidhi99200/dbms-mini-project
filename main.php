<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="hstyle.css">
  
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <a class="navbar-brand" href="login.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Event Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="admin/index.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Admin</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Login</a>
      </li>
      
       

      <li class="nav-item">
        <a class="nav-link " href="registration.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Sign Up</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="about.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">About</a>
      </li>
    

    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="main.jfif" alt="a" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="font-size:50px;font-weight: bold;font-family: Georgia, serif;"><mark style="background-color:white">W E L C O M E</mark></h3>
        <p style="font-size: 25px; font-weight: bold;color: white;font-family:Georgia;background-color:black">TO THE EVENT MANAGEMENT SYSTEM </p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="b.jpg" alt="b" width="1100" height="500">
      <div class="carousel-caption">
        
        <p style="font-size: 25px; font-weight: bold;color:white;font-family:Georgia; background-color:black">WE MAKE AND MANAGE EVENTS EASY FOR YOU :)</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="c.jpg" alt="c" width="1100" height="500">
      <div class="carousel-caption">
        
        <p style="font-size: 25px; font-weight: bold;color:white; font-family:Georgia;">THANK YOU FOR VISITING US !!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
  <h1></h1>
  <p></p>
</div>

</body>
</html>