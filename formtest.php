

<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Western Tarin | Booking</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/ims/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/ims/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/imes/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

</head>
<style>
    .home a {
        color: rgb(248, 32, 3);
    }
    
    .home a:hover {
        color: rgb(3, 19, 247);
    }
</style>

<body>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <div class="home">
                    <p style="margin-top: 1rem; font-weight: bold; "><a href="index.html"> Home</a>/ <a href="trains.html"> Trains</a> / Booking</p>
                </div>

            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="mobile-menu-overlay"></div>

    <div class="container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">


                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">Train Ticket</h4>
                        <p class="mb-30">Proceed with your Ticket Booking</p>
                    </div>
                    <div class="wizard-content">
                        <form class="tab-wizard wizard-circle wizard" action="connect.php" aria-hidden="true">
                            <h5>Personal Info</h5>
                            <section>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name :</label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name :</label>
                                            <input type="text" class="form-control" name="lname" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address :</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number :</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div> -->

                            </section>
                            <!-- Step 2 -->
                            <h5>Travel Details</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Travelling From :</label>
                                            <select class="form-control" required>
												<option>Nairobi</option>
												<option>Kisumu</option>
												<option>Nakuru</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Travelling From :</label>
                                            <select class="form-control" required>
												<option>Kisumu</option>
												<option>Nairobi</option>
												<option>Nakuru</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Travelling Date :</label>
                                                <input type="text" class="form-control date-picker" placeholder="Select Date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Travelling Time :</label>
                                                <input type="text" class="form-control" placeholder="All Trains to leave their respective stations at 8.00 AM" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> 

                            <!-- Step 3 -->
                            <h5>Other Details</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Age :</label>
                                            <input type="text" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Secondary Phone No :</label>
                                            <input type="text" class="form-control date-picker" placeholder="Select Date" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Gender :</label>
                                            <select class="form-control" required>
												<option>Male</option>
												<option>Female</option>
												
											</select>
                                        </div>

                                        <div class="form-group">
                                            <label>Marital Status :</label>

                                            <select class="form-control" required>
												<option>Single</option>
												<option>Married</option>												
											</select>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h5>Remark</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label>Any Health Status :</label>
                                            <select class="form-control" name="reason" required>
												
												<option>Yes</option>
												<option>No</option>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mention if any :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Write a brief comment on your expection through your travel</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    </div>
                            </section>
                        </form>
                        </div>
                    </div>
                    

                    <!-- success Popup html Start -->
                    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    </div>
                    <!-- success Popup html End -->
                </div>

            </div>
        </div>
        <!-- js -->
        <script src="vendors/scripts/core.js"></script>
        <script src="vendors/scripts/script.min.js"></script>
        <script src="vendors/scripts/process.js"></script>
        <script src="vendors/scripts/layout-settings.js"></script>
        <script src="assets/jquery-steps/jquery.steps.js"></script>
        <script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>

<?php 
}
?>