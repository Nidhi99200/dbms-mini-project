<!DOCTYPE html>
<html lang="en">

<head>
    <title>Venue</title>
     <  <meta charset="utf-8">
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
      <a class="dropdown-item" href="venue.php" style="font-size: 25px;color: black; font-weight: bold;  font-family:Georgia;">Book Venue</a>
      <a class="dropdown-item" href="booking_details.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Fill Booking Details</a>
      <a class="dropdown-item" href="event.php" style="font-size: 25px;color: black; font-weight: bold;  font-family:Georgia;">Book Event</a>
    </div>
  </li>
     
    <li class="nav-item">
        <a class="nav-link"href="logout.php" style="font-size: 25px;color: black; font-weight: bold; background-color: #C0C0C0; font-family:Georgia;">Logout</a>
      </li>   
  </ul>
    <br> <br>
    <br> <br> 
    <center>
        <h1 style="font-size: 35px; font-weight: bold;font-family:Georgia;">Enter data to store in the Venue Table</h1>

    <br>
     <div class="strokeme">
        <form action="insert2.php" method="post" style="color:#00FFFF; font-size: 35px; font-weight: bold;font-family:Georgia;">
            
            
<p>
                <label for="name">Venue Name:</label>
                <input type="text" name="name" id="name">
            </p>
            
<p>
                <label for="address">Venue Address:</label>
                <input type="text" name="address" id="address">
            </p>
<p>
                <label for="eventid">Event Id:</label>
                <input type="text" name="eid" id="eventid">
            </p>
            <input type="submit" value="Submit" style="color:blue; font-size: 35px; font-weight: bold;font-family:Georgia;background-color: #273746;">
        </form>
         <div class="strokeme">
    </center>
</body>

</html>
