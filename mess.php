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
}

$sql = "INSERT INTO message ( name, email, message)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";

if (mysqli_query($con, $sql)) { 
  echo "<script>
  alert('We have successfully received your Feedback. Thank You !');
  window.location.href='index.php';
 
  </script>";
  
} else {
   echo '<script>alert("Fill out the requirements correctly") </script>' ;
}

mysqli_close($con);
?>