<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="hstyle.css">
</head>

<body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="user.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Customer Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Home</a>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size: 25px; font-weight: bold;font-family:Georgia;">Logout</a>
      </li>
  </ul>
</div>
</nav>
	<center>
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
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$cid = $_REQUEST['cid'];
		
		// Performing insert query execution
		// here our table name is guest
		$sql = "INSERT INTO `guest` (first_name, last_name, gender,address, email,cid) VALUES ('$first_name',
			'$last_name','$gender','$address','$email','$cid')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email\n $cid");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		
	</center>
</body>

</html>
