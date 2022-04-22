<!DOCTYPE html>
<html lang="en">

<head>
    <title>Guest</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="hstyle.css">
     <style>
        .strokeme {
            color: white;

            text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
            #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
          }
    body {background-image: url("pink.jpg"); background-repeat: no-repeat; background-size: cover;}
    </style> 
</head>

<body>
    <ul class="nav justify-content-center">
   
     <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 25px; color: black; background-color:#FFD700; font-weight: bold;font-family:Georgia;">Customer Dashboard</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="event.php" style="font-size: 25px;color: black; font-weight: bold;  font-family:Georgia;">Book Event</a>
      

    </div>
  </li>
     
    <li class="nav-item">
        <a class="nav-link"href="logout.php" style="font-size: 25px;color: black; font-weight: bold; background-color: #C0C0C0; font-family:Georgia;">Logout</a>
      </li>   
  </ul>
    <center>
     
        <br>  
        <h1 style="font-size: 45px; font-weight: bold;font-family:Georgia;">Enter data to store in the Guest Table</h1>
         <div class="strokeme">
        <form action="insert.php" method="post" style=" color:#00FFFF; font-size: 35px; font-weight: bold;font-family:Georgia;">
         <br>  
            
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>          
            
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
          
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
            <p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address">
            </p>
            
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
            <p>
                <label for="customerid">Customer id:</label>
                <input type="text" name=cid id="customerid">
            </p>
            <input type="submit" value="Submit" style="color:blue; font-size: 35px; font-weight: normal;font-family:Georgia; background-color: #273746;">
        </form>
         <div class="strokeme">
    </center>
</body>

</html>
