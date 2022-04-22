<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="s.css">
     <style>
    body {background-image: url("pink.jpg"); background-size: cover;}
    </style> 
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `customer` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: user.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title" style="font-size: 30px;color: black; font-weight: bold;font-family:Georgia;" >Customer Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" style="font-size:25px ;color: black; font-weight: bold;font-family:Georgia;"/>
        <input type="password" class="login-input" name="password" placeholder="Password"style="font-size:25px ;color: black; font-weight: bold;font-family:Georgia;"/>
        <input type="submit" value="Login" name="submit" class="login-button"style="font-size: 25px; font-weight: bold;font-family:Georgia;"/>
        <p class="link" style="font-size: 25px;color:black; font-weight: bold;font-family:Georgia;">Don't have an account? <a href="registration.php" style="font-size: 25px; color: #4B0082; font-weight: bold;font-family:Georgia;">Register Now</a></p>
        <center><p style="font-size: 35px;color:black; font-weight: bold;font-family:Georgia;">OR</p></center>
         <p class="link" style="font-size: 25px;color:black; font-weight: bold;font-family:Georgia;">Click here to return back to <a href="home.php" style="font-size: 25px; color: #4B0082; font-weight: bold;font-family:Georgia;">Home Page</a></p>
  </form>
<?php
    }
?>
</body>
</html>
