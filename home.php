<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <style>
body {
  background-image: url('party2.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.strokeme {
  color: white;

  text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
             #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
}
h1{text-align: center; font-size: 75px;color: #4B0082 ; font-weight: bold;    font-family: "Times New Roman", Times, serif;  font-style:oblique;}
h2{text-align: right; font-size: 50px;color:#00BFFF ; font-weight: bold;  font-family:Georgia; padding-right: 200px;}
p{text-align: right; font-size: 40px;color:#D0FF50; font-weight: bold;  font-family:Georgia; padding-right: 150px;}

.content {
  position: absolute;
  bottom: 0;
  background: rgb(218,165,32); /* Fallback color */
  background: rgba(218,165,32, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.btn-space {
    margin-right: 350px;
}
</style>
  
</head>
<body>
<ul class="nav">
   
     <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 25px; color: black; background-color:#FFD700; font-weight: bold;font-family:Georgia;">Login</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="login.php" style="font-size: 25px;color: black; font-weight: bold;  font-family:Georgia;">Customer Login</a>
      <a class="dropdown-item" href="admin/index.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Admin Login</a>

    </div>
  </li>
     
    <li class="nav-item">
        <a class="nav-link"href="registration.php" style="font-size: 25px;color: black; font-weight: bold; background-color: #C0C0C0; font-family:Georgia;">Sign Up</a>
      </li>   
  </ul>
  <br>
  <br>
  <br>
   <div class="content">
    <div class="strokeme">
    <h1>Welcome to the Event Management System</h1>
  </div>
 </div>
 <br><br>
 <br><br>
 <div class="strokeme">
 <h2>"What you need,is an Event,<br> to remember for a lifetime"</h2>
 <p> Let us take you into a deeper experience,<br> make a moment a lasting conveyable memory.</p>
 </div>
<a href="registration.php" class="btn float-right btn-space btn-primary active" style="font-size: 25px;color: white; font-weight: bold; background-color: #00008B; font-family:Georgia;" >Register Now</a>
 </div>
</body>
</html>