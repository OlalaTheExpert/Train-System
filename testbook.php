 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Western Tarin | Booking</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .home a{
color:rgb(248, 32, 3);

    }
    .home a:hover{
color:rgb(3, 19, 247);
    }
</style>
</head>
<body>
      <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-left: 6rem;">
        
  
          <div class="d-flex justify-content-between align-items-center">
              <div class="home">
            <p style="margin-top: 2rem; font-weight: bold; color: black;"><a href="index.php"> Home</a>/ <a href="trains.php"> Trains</a> / Booking</p>
        </div>
            
        
  
        </div>
    </section><!-- End Breadcrumbs -->

    <div class="main">

        <div class="container">
        <table>
             <tr>
                 <td>
            <form method="POST" class="appointment-form" id="appointment-form" method="POST" action="confirm.php">
                <h2 style="margin-top: -5rem;">Ticket Booking Form</h2>
                
                <h3><u>Personal Information</u></h3>
                <div class="form-group-1">
                    <input type="text" name="fname" placeholder="First Name" required />
                    <input type="text" name="lname" placeholder="Surname" required />
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="number" name="age" placeholder="Your Age" required />
                    <input type="number" name="phone" placeholder="Phone number" required />
                    <div class="form-control">
                        <select name="gender" >
                            <option slected value="">Choose your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    </td>
                     <td>
    
                    <h3 style="margin-top: 7rem;"><u>Booking Details</u></h3>
                    <div class="form-control">
                    <label>Departure</label>
                                        <input name="departure" type="text" value="<?php echo $departure; ?>" readonly class="form-control">
                 
                    </div>
                  
                    <div class="form-control">
                    <label>Destination</label>
                                        <input name="destination" type="text" value="<?php echo $destination; ?>" readonly class="form-control">
                 
                    </div>
                    <div class="form-group">
                                        <label>Travelling Date</label>
                                        <input name="tdate" type="text" value="<?php echo $date; ?>" readonly class="form-control">
                    </div>
                    <input type="text" value="<?php echo $id ?>" name="the_id" hidden style="display:none;">
                    <!-- <div class="form-controlt">
                        <select name="course_type" id="type">
                            <option slected value="">Course Type</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div> -->
                </div>

                <div class="form-group-2">
                    <h3>How would you like to be reached ?</h3>
                    <div class="select-list">
                        <select name="com"">
                            <option seleected value="By_Phone">By phone</option>
                            <option value="By_email">By email</option>
                        </select>
                    </div>
                    <!-- <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div> -->
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div> -->
                <div class="form-submit">
                
                    <input type="submit" name="submit" id="submit" class="submit" value="Book Your Ticket" />
                    
                </div>
            </form>
        </div>
        
</td>
</tr>
</table>
    </div>
    <!-- success Popup html Start -->
    <!-- <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Ticket Booked Successfully!</h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								Your ticket has been booked Successfully, Please visit any near station for your ticket
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
							</div>
						</div>
					</div>
				</div> -->
				<!-- success Popup html End -->

    <!-- JS -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
