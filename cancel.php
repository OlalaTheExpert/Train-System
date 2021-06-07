<?php

include ('db.php');

$id=$_GET['pid'];
if($id=="")
{
echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
		header("Location: index.php");


}

else{
$view="DELETE FROM `bookings` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Message Deleted Successfully") </script>' ;
		header("Location: index.php");
	}

}


?>