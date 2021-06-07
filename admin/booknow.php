<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Western Trains | Booking Form</title>


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" href="vendors/styles/formstyle.css">



	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">

			</div>
		</div>

		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a href="usersetting.php" class="dropdown-toggle no-arrow">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>

			<div class="user-notification">
				<div class="dropdown">

					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll text-capitalize">
							<ul>
								<li>
									<a href="#">
									<!-- <i class="dw dw-user1"></i> -->
									<?php
							 		include('db.php');
							  $sql = "SELECT * FROM `message`";
							  $re = mysqli_query($con,$sql);

										while($row = mysqli_fetch_array($re))
										{

											$id = $row['id'];

											if($id % 2 ==1 )
											{
												echo"<ul class='gradeC'>
												<li><h6><i class='dw dw-user1'></i>".$row['name']."</h6>
												<p>".$row['message']."</li>
												<hr style='color:blue'></hr>
												</ul>";
											}
											else
											{
												echo"<ul class='gradeU'>
												<li><h6><i class='dw dw-user1'></i>".$row['name']."</h6>
												<p>".$row['message']." </p></li>
												<hr></hr>

												</ul>";

											}

										}

									?></p>
									</a>
								</li>


							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">



						<span class="user-name text-capitalize" style="font-weight: bold; font-size: 20px; color: black;">
						<i class="dw dw-user1" style="font-size:25px; color:blue;"></i>
						<?php echo $_SESSION["user"]; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<!-- <a class="dropdown-item" href="usersetting.php"><i class="dw dw-user1"></i> Profile</a> -->
						<!-- <a class="dropdown-item" href="usersetting.php"><i class="dw dw-settings2"></i> Setting</a>						 -->
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo" style=" margin-top: 1rem;" >
			<a href="dashboard.php">
			<img src="vendors/images/trainlogo1.png" alt="" class="light-logo">

			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
            <ul id="accordion-menu">


					<li>
						<a href="dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>

						<li>
							<a href="booknow.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-edit1"></span><span class="mtext">Book</span>
							</a>
						</li>
						<li>
							<a href="bookings.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-train"></span><span class="mtext">Bookings</span>
							</a>
						</li>

						<li>
							<a href="train.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-add"></span><span class="mtext">Train (s)</span>
							</a>
						</li>
						<li>
							<a href="routes.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-road"></span><span class="mtext">Routes</span>
							</a>
						</li>
						<li>
							<a href="payment.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-money"></span><span class="mtext">Payment</span>
							</a>
						</li>

						<li>
							<a href="messages.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-message"></span><span class="mtext">Messages</span>
							</a>
						</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<a href="logout.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-logout"></span><span class="mtext" style="color:blue; font-weight: bold;">Logout</span>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">


				<div class="pd-20 card-box mb-30">

					<main class="page payment-page">

    <section class="payment-form dark">
      <!-- <div class="container"> -->
        <div class="block-heading">
          <h2>BOOKING FORM</h2>
          <p>Secure your Ticket with us Now!</p>
        </div>
        <form method="POST" action="connect.php">
          <div class="products">

          <div class="card-details">
            <h3 class="title">Personal Details</h3>
            <div class="row">

              <div class="form-group col-sm-6">
                <label for="card-holder">First Name</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Olala" name="fname" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="">Last Name</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="Victor" name="lname" required>

                </div>
              </div>
              <div class="form-group col-sm-6">
                <label for="card-number">Email</label>
                <input id="card-number" type="email" class="form-control" placeholder="olalavictor@gmail.com" name="email" required>
              </div>
			  <!-- <div class="col-md-6 col-sm-12">
				<label class="weight-600">GENDER</label>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio1" name="gender" class="custom-control-input">
					<label class="custom-control-label" for="customRadio1">Male</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio2" name="gender" class="custom-control-input">
					<label class="custom-control-label" for="customRadio2">Female</label>
				</div> 
			</div>-->

              <div class="form-group col-sm-6">
                <label for="cvc">Gender</label>
                <select class="custom-select col-12" name="gender">
									<option selected="" disabled>Choose gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>

								</select>
              </div>
			  
              <div class="col-md-6 col-sm-12">
                <label for="card-holder">Age</label>
                <input id="card-holder" type="number" class="form-control" placeholder="20" name="age" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="">Phone Number</label>
                <div class="input-group expiration-date">
                  <input type="number" class="form-control" placeholder="2547******60" name="phone" required>

                </div>
              </div>


			  <div class="card-details">
            <h3 class="title">Travelling Details</h3>
            <div class="row">

              <div class="form-group col-sm-6">
                <label for="card-holder">Departure</label>
				<select class="custom-select col-12" name="departure">
									<option selected="" disabled>Choose your Departure</option>
									<option>Nairobi</option>
									<option>Kisumu</option>

								</select>
              </div>
              <div class="form-group col-sm-6">
                <label for="">Destination</label>
                <div class="input-group expiration-date">
				<select class="custom-select col-12" name="destination">
									<option selected="" disabled>Choose your Destination</option>
									<option>Kisumu</option>
									<option>Nairobi</option>

								</select>

                </div>
              </div>
              <div class="form-group col-sm-6">
                <label for="card-number">Date</label>
                <input id="card-number" type="date" class="form-control" placeholder="olalavictor@gmail.com" name="tdate" required min="<?php echo Date("Y-m-d") ?>">
              </div>
              <div class="form-group col-sm-6">
                <label for="card-holder">Time</label>
                <input id="card-holder" type="time" class="form-control" placeholder="20" name="age" required>
              </div>
              </div>

                            </div>
              <div class="form-group col-sm-12">
                <label for="card-holder">How would you like to be reached ?</label>
                <select class="custom-select col-12" name="com">
									<option selected="" disabled>Choose Mode of Communication</option>
									<option>Email</option>
									<option>Phone</option>

								</select>
              </div>
              <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">Book Your Ticket</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>




						</div>
					</div>
				</div>


			</div>
			</div>
</div>

			<div class="footer-wrap pd-20 mb-20 card-box">
				<p>© Copyright WesternTrains. All Rights Reserved</p>
			</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>

