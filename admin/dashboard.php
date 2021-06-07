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
	<title>Western Trains |Admin Dashboard</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<!-- <div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div> -->
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
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
												
						
					
						<span class="" style="font-weight: bold; font-size: 20px; color: black;">
						<i class="dw dw-user1" style="font-size:25px; color:blue;"></i>
						<?php echo $_SESSION["user"]; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<!-- <a class="dropdown-item" href="usersetting.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="usersetting.php"><i class="dw dw-settings2"></i> Setting</a>						 -->
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

	<?php
						include ('db.php');
						$sql = "select * from message";
						$re = mysqli_query($con,$sql);
						$mes =0;
						while($row=mysqli_fetch_array($re) )
						{
							$mes = $mes + 1;

						}
						?>



						<?php
						include ('db.php');
						$sql = "select * from bookings";
						$re = mysqli_query($con,$sql);
						$book =0;
						while($row=mysqli_fetch_array($re) )
						{
							$book = $book + 1;

						}
						?>

						<?php
						include ('db.php');
						$sql = "select * from payment";
						$re = mysqli_query($con,$sql);
						$approve =0;
						while($row=mysqli_fetch_array($re) )
						{
							$approve = $approve + 1;

						}
						?>

<?php
						include ('db.php');
						$sql = "select * from routes";
						$re = mysqli_query($con,$sql);
						$routes =0;
						while($row=mysqli_fetch_array($re) )
						{
							$routes = $routes + 1;

						}
						?>
						<?php
						include ('db.php');
						$sql = "select * from addtrain";
						$re = mysqli_query($con,$sql);
						$pr=0;
					    while($row=mysqli_fetch_array($re) )
						{
							$pr = $row['fare'];
							$tot = $pr * $book;

						}
                      ?>


	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Feel Welcome <span class="weight-600 font-20 text-blue">
							<?php echo $_SESSION["user"]; ?></span>,
						</h4>
						<p class="font-18 max-width-600">"People with integrity do what they say they are going to do. That's what we do here at Western Train Reservation Center"</p>
					</div>
					<div class="col-md-4">
						<!-- <img src="vendors/images/train.png" alt=""> -->
						<img src="vendors/images/banner-img.png" alt="">
					</div>
				</div>
				<div class="col-md-11 text-left">
					<div class="dropdown">
					<div class="weight-600 font-10 text-blue">
						<?php                            
							echo date(" d/m/Y");
							?>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
				<a href="bookings.php">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
								echo $book;
								
								?>
								
								</div>
								<div class="weight-600 font-14">Bookings</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
				<a href="messages.php">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
								echo $mes; 
								?>
								
								</div>
								<div class="weight-600 font-14">Messages</div>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
				<a href="remove.php">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
								echo $routes;
								
								?>
								
								</div>
								<div class="weight-600 font-14">Routes</div>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
				<a href="payment.php">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							
							 <div class="widget-data">
								<div class="h4 mb-0">
								<?php
								echo $approve;
								?>								
								</div>
								<div class="weight-600 font-14">Approved</div>
							</div>
						</div>
					</div>
					</a>
				</div>
			</div>
		
			
			</div>
			
			</div>
</div>

	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>