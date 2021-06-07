<?php
	include ('db.php');
									
if(isset($_POST['co']))
						{
							$myid = $_REQUEST['this'];
							$st = $_POST['conf'];

							$sql = "select * from payment";
							$re = mysqli_query($con,$sql);
							$c =0;
							while($row=mysqli_fetch_array($re) )
							{
								$c = $c + 1;
	
	
							}
	
	?>
	<?php
							include ('db.php');
							$sql = "select * from payment";
							$re = mysqli_query($con,$sql);
							$sn =0;
							while($row=mysqli_fetch_array($re) )
							{
								$sn = $sn + 1;
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
								$totl = $pr * $sn;
	
							}


				$sql ="Select * from bookings where id = '$myid'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					
					$id = $row['id'];
					$rand = $row['rand_id'];
					$fname = $row['fname'];
					$lname = $row['lname'];
					$email = $row['email'];
					$age = $row['age'];
					$phone = $row['phone'];
					$gender = $row['gender'];
					$dept = $row['departure'];
					$dest = $row['destination'];
					$tdate = $row['tdate'];
                    $com = $row['com'];
					$firm = $row['stat'];

				}


										if( $st=="Conform")
											{
												
												$update = "UPDATE `bookings` SET `stat` = 0 WHERE id = $id";

												if(mysqli_query($con, $update)){
													//echo 'Success';
												}
											}

												$sql = "INSERT INTO `payment`(`rand_id`, `fname`, `lname`, `gender`, `departure`, `destination`, `phone`, `email`, `tdate`, `ttot`, `seatno` )
														VALUES ('$rand', '$fname','$lname','$gender','$dept','$dest', '$phone','$email','$tdate', '$pr', '$sn')";

														if(mysqli_query($con,$sql))
														{
															

															//echo "<script type='text/javascript'> alert('Booking Conform')</script>";
															// echo "<script type='text/javascript'> window.location='payment.php'</script>";



														}

							

					
	
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Western Trains | Payments</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

    <div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			

				<!-- Contextual classes Start -->
				<div class="pd-20 card-box mb-30">
					
					<div class="table table-striped">
						<table class="table">
						<thead>
                                        <tr>
                                        	
                                            <th>Name</th>
											<th>Departure</th>
                                            <th>Destination</th>
											
											<th>Date</th>
											<th>Phone</th>
											
											<th>Seat NO</th>
											<th>Price</th>
											<th>Print</th>
											<th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

									<?php
									
									$id = $_REQUEST['this'];

										$sql="select * from payment where rand_id =$rand";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

											

											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['departure']."</td>
                                                    <td>".$row['destination']."</td>
													
													<td>".$row['tdate']."</td>
													<td>".$row['phone']."</td>
													
													<td>".$row['seatno']."B</td>
													<td>".$row['ttot']."</td>
													<td><a href=print.php?pid=".$rand ." <button class='btn btn-primary'>  Print</button></td>
													<td><a href=cancel.php?pid=".$rand ." <button class='btn btn-primary' style='background-color:red; border: 1px solid red;'> Cancel</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['departure']."</td>
                                                    <td>".$row['destination']."</td>
													
													<td>".$row['tdate']."</td>
													<td>".$row['phone']."</td>
													
													<td>".$row['seatno']."A</td>
													<td>".$row['ttot']."</td>
													<td><a href=print.php?pid=".$rand ." <button class='btn btn-primary' > Print</button></td>
													<td><a href=cancel.php?pid=".$rand ." <button class='btn btn-primary' style='background-color:red; border: 1px solid red;'>  Cancel</button></td>
													</tr>";

											}
										
									}

									?> 

                                    </tbody>

						</table>

					</div>
				</div>


</div>
</div>

				

	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>

<?php

}



?>