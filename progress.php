<?php
include('db.php');
		$sql ="Select * from bookings where id = '$id'";
		$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					//$title = $row['Title'];
					$id = $row['id'];
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
            
?>
<?php
						include ('db.php');
						$sql = "select * from payment";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
							$c = $c + 1;


								//}

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


								//}

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
                      ?>




<?php
if(isset($_POST['co']))
    {
        $st = $_REQUEST['conf'];
        echo $st;


        // if($st=="Conform")
        // {
            // $conf ='Confirmed';
            // $pdate = "UPDATE `bookings` SET `stat`='$conf' where id ='$id' ";


                    if( $st ="Conform")
                        {
                            
                            $update = "UPDATE `bookings` SET `stat` = 0 WHERE id = $id";

                            if(mysqli_query($con, $update)){
                                echo 'Success';
                            }
                       
                            }
                        

                            $sql = "INSERT INTO `payment`(`fname`, `lname`, `gender`, `departure`, `destination`, `phone`, `email`, `tdate`, `ttot`, `seatno` )
                                    VALUES ('$fname','$lname','$gender','$dept','$dest', '$phone','$email','$tdate', '$pr', '$sn')";

                                    if(mysqli_query($con,$sql))
                                    {
                                        

                                        echo "<script type='text/javascript'> alert('Booking Conform')</script>";
                                        //echo "<script type='text/javascript'> window.location='payment.php'</script>";



                                    }
                                    else{
                                        echo('Error Ya Kwanza'. mysqli_error($con));
                                    }
       
    }
    else{
        echo(mysqli_error($con). 'Error Wallla');
    }





    ?>