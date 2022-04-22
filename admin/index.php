<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Admin Login Page</title>
	<style>
    body {background-image: url("aadmin.jpg");background-repeat: no-repeat; background-size: cover;}
    </style> 
</head>

<body>
	<form action="validate.php" method="post">
		<div class="login-box">
			<br>
			<br>
			<h1 style="font-size:35px;font-weight: bold;font-family: Georgia, serif; color: #000080;">Admin Login</h1>

			<div class="textbox" style="font-size:25px;font-weight: bold;font-family: Georgia, serif;">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Admin Name"
						name="adminname" value="" style="background-color: white;font-weight: bold;font-family: Georgia, serif;">
			</div>

			<div class="textbox" style="font-size:25px;font-weight: bold;font-family: Georgia, serif;">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="" style="background-color: white;font-weight: bold;font-family: Georgia, serif;">
			</div>
            <br>
			<input class="button" type="submit"
					name="login" value="Sign In" style="font-size:25px; font-weight: bold;font-family: Georgia, serif;">
		</div>
	</form>
</body>

</html>
