
<?php
							 		include('db.php');
                   ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Western Trains | Reservation</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 
  
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

 


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        
          <h2>Train Tickets</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Booking</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
  	
					
						<?php
						include ('db.php');

            if(isset($_POST["submit"])){
              $departure = $_REQUEST['route'];
              $destination = $_REQUEST['route_two'];
              $date = $_REQUEST['date'];
            }
						$sql = "SELECT * FROM routes WHERE departure = '$departure' AND destination = '$destination' AND  date = '$date'" ;
						$re = mysqli_query($con,$sql);

            $num_of_rows = mysqli_num_rows($re);

						$c =0;
            $rem =0;
            if ($num_of_rows <= 0){
              echo '<h3 class="text-center pt-5">No Available trains on Selected Date </h3>';
            }else{             
            
						while($row=mysqli_fetch_array($re) )
						              
            {
							// $c = $c + 1;

              $train_id = $row['train_id'];
              
              $departure = $row['departure'];
              $destination = $row['destination'];
              $fare = $row['price'];
              $date = $row['date'];
              $time = $row['time'];
              
            $query = mysqli_query($con, "SELECT * FROM trains WHERE id = '$train_id'");

            while($row_two = mysqli_fetch_array($query)){
              $name = $row_two['name'];
              $total_seats = $row_two['seats'];
              $booked_seats = $row_two['booked_seats'];

              $ava=0;
              $ava= $total_seats - $booked_seats; 
            if($ava == 0){
              echo '<h3 class="text-center pt-5">Sorry, The Train is full please choose another Train </h3>';
                }
                else{
           
				?>
         <?php 

      
   ?>
   
    

    <section class="inner-page">
      <div class="container">
      <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
          <div class="pull-left">
            <h4 class="text-blue h4">Available Trains Today</h4>
            <!-- <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table  .table-responsive</code> Or, pick a maximum breakpoint with which to have a responsive table up to by using<code>.table-responsive{-sm|-md|-lg|-xl}</code>.</p> -->
          </div>
      
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
               
                <th scope="col">Train</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Fare (Ksh.)</th>
                <th scope="col">Total Seats</th>
                <th scope="col">Ava. Seats</th>
                <th scope="col">Book Online</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <th scope='row'> <?php echo $name; ?> </td>
            <td> <?php echo $departure; ?> </td>
            <td> <?php echo $destination; ?> </td>
            <td> <?php echo $date; ?> </td>
            <td> <?php echo $time; ?> </td>
            <td> <?php echo "Kshs." .$fare; ?> </td>
            <td> <?php echo $total_seats; ?> </td>
            <td> <?php echo $ava; ?> </td>
            <td><a href="book.php?eid=<?php echo $train_id; ?>" <button class='get-started-btn scrollto' style='margin-left: 0rem;'> <i class='fa fa-edit' ></i> Book Now</button></td>
            </tr>
            

             
            </tbody>
          </table>
        </div>
        </section>
        <?php
            }
          }
          }
         
        }
          ?>
          <!-- <div class="mchezo" style="float:center">
       <a href="index.php"><img src="assets/img/trainlogo.png" alt=""  class="img-fluid"></a>
       </div> -->

   <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="section-title">
    <center>
    <h2>Why Train Tickets</h2>
  </center>
    
  </div>

  <div class="row justify-content-end">
    <div class="col-lg-11">
      <div class="row justify-content-end">

        <div class="col-lg-4 col-md-5 col-6 d-md-flex">
          <div class="count-box">
            <i class="icofont-clock-time"></i>
            <span style="font-size: 20px; font-family: sans-serif;">Easy to use</span>
            <p class="card-text">We cut through the complexity of booking travel online</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span style="font-size: 20px; font-family: sans-serif;">Safe and secure</span>
            <p>We add an extra layer of security to protect yours online bookings</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span style="font-size: 20px; font-family: sans-serif;">Best price mix</span>
            <p>We combine the cheapest train options to get you an even cheaper deal</p>
          </div>
        </div>


      </div>
    </div>
  </div>
      </div>
    </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WesternTrains</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End Footer -->


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