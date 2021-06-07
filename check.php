<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "western-train";

// Create connection
$con = mysqli_connect("localhost","root","","western-train") or die(mysql_error());
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());

} else {
    header("location: trains.php");

}

?>