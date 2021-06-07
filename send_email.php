 <p>This is testing</p>

 <?php

    
    session_start();

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;

   require 'PHPMailer/src/Exception.php';
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';

    /* Exception class. */


    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
   // $state = $_REQUEST['state'];
   // $country = $_REQUEST['country'];
   // $final_price = $_REQUEST['total'];

   // echo $final_price;


    $form_data = array("name" => $name, "email" => $email, "message" => $message);

    $message = "Dear " . $form_data['name'] . "\r\n";
   // $message .= "We have already received your order\r\n";
    //$message .= "We will deliver the product for you as soon as possible.\r\n";
    $message .= " " . $form_data['email'] . ".\r\n";
    $message .= " " . $form_data['message'] . " \r\n";
    $message .= "Thank You.\r\n";
    $message .= "Have a good day.\r\n";



    //PHPMailer Object
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or  465/25/ 587 
    $mail->IsHTML(true);
    $mail->Username = "olalavictor01@gmail.com"; // Enter your Email
    $mail->Password = "olalavic"; // Enter your Email Password
    $mail->SetFrom("olalavictor01@gmail.com");
    $mail->Subject = "It was a Test";
    $mail->Body = $message;
    $mail->AddAddress($email);

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "<script>
            alert('Mail Sent Successfully');
           
            </script>";
    }


    ?>