<!DOCTYPE html>
<html lang="en">

<head>

    <title>Event </title>
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
    body {background-image: url("pink.jpg");  background-size: cover;}
    </style> 
</head>

<body>

   <ul class="nav justify-content-center">
   
     <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 25px; color: black; background-color:#FFD700; font-weight: bold;font-family:Georgia;">Customer Dashboard</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="venue.php" style="font-size: 25px;color: black; font-weight: bold;  font-family:Georgia;">Book Venue</a>
      <a class="dropdown-item" href="booking_details.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Fill Booking details</a>
      <a class="dropdown-item" href="guest.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Invite Guest</a>
    </div>
  </li>
     
    <li class="nav-item">
        <a class="nav-link"href="logout.php" style="font-size: 25px;color: black; font-weight: bold; background-color: #C0C0C0; font-family:Georgia;">Logout</a>
      </li>   
  </ul>

    <center>
        <br><br>
        <br><br>
        <div class="strokeme">
        <h1 style="font-size: 50px; color:#00BFFF; font-weight: bold;font-family:Georgia;">Enter the data to store in the Event Table</h1>
        <br>

        <form action="insert1.php" method="post" style=" color:#F0F8FF; font-size: 45px; font-weight: bold;font-family:Georgia;">
            

<p>
                <label for="Type">Event Type:</label>
                <input type="text" name="etype" id="type">
            </p>


<p>
                <label for="Name">Event Name:</label>
                <input type="text" name="name" id="Name">
            </p>
<p>
                <label for="customerid">Customer id:</label>
                <input type="text" name=cid id="customerid">
            </p>            

            <input type="submit" value="Submit" style=" color: white; font-size: 45px; font-weight: normal;font-family:Georgia; background-color: #00008B;">
        </form>
      </div>
    </center>
</body>

</html>
