<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems";
$id=$_GET['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM customer WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location:displayc.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>