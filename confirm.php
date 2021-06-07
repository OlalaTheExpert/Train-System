<?php

include('db.php');

// Create connection
$con = mysqli_connect("localhost","root","","western-train") or die(mysql_error());
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$rand_id = rand();

$train_id = $_REQUEST['the_id'];



$sql = "INSERT INTO bookings (rand_id, fname, lname, email, age, phone, gender, departure, destination, tdate, com )
VALUES ('$rand_id', '".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['age']."','".$_POST['phone']."','".$_POST['gender']."','".$_POST['departure']."','".$_POST['destination']."','".$_POST['tdate']."','".$_POST['com']."')";

$sql2 = mysqli_query($con, "UPDATE trains SET booked_seats = (booked_seats + 1) WHERE id = $train_id");

if (mysqli_query($con, $sql)) { 
 
 echo '<script>alert("You have successfully secure a ticket") </script>' ;
  
} else {
   echo '<script>alert("Fill out the requirements correctly") </script>' ;
}

mysqli_close($con);

//include('db.php');
//$sql="Select * from bookings";
if(isset($_GET["id"])){
	$id = $_GET['id'];
}





				$id = $_REQUEST['the_id'];

				
			?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Western Trains | Reservation</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->

  <main id="main">
<section class="inner-page">
      <div class="container">
      <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
          <div class="pull-left">
            <h4 class="text-blue h4">Confirm your details here</h4>
            <!-- <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table  .table-responsive</code> Or, pick a maximum breakpoint with which to have a responsive table up to by using<code>.table-responsive{-sm|-md|-lg|-xl}</code>.</p> -->
          </div>
      
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
								
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Dept</th>
                                <th>Dest</th>
                                
                                <th>Date</th>
                                <th>Com. Channel</th>
                                <th>Action</th>
                            </tr>
            </thead>
            <tbody>
            <?php
							 		include('db.php');	
							  $sql = "SELECT * FROM `bookings` WHERE rand_id = '$rand_id' ";
							  $re = mysqli_query($con,$sql);
							  
						
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
												
												<td>".$row['fname']." ".$row['lname']." </td>
													 
                                                   
													<td>".$row['phone']."</td>
													<td>".$row['gender']."</td>
													<td>".$row['departure']."</td>
													<td>".$row['destination']."</td>
                        
													<td>".$row['tdate']."</td>
													<td>".$row['com']."</td>
													<th><a href='approve.php?rid=".$row['id']." ' class='get-started-btn scrollto' style='margin-left: 0rem;'> <i class='fa fa-edit' >Confirm</a></th>
																										
													
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
												
												<td>".$row['fname']." ".$row['lname']." </td>
												
                                                    
													<td>".$row['phone']."</td>
													<td>".$row['gender']."</td>
													<td>".$row['departure']."</td>
													<td>".$row['destination']."</td>
                            
													<td>".$row['tdate']."</td>
													<td>".$row['com']."</td>
													<th><a href='approve.php?rid=".$row['id']." ' class='btn btn-primary'>Approve</a></th>                                              
										
												</tr>";
											
											}
										
										}
										
									?>
								
             
            </tbody>
          </table>
        </div>
        </section>
        
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
