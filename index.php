<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v7 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="" method="post">
					<h3>Contact Us</h3>
					<p>Please Drop Your Mail Here!</p>
					<label class="form-group">
						<input type="text" class="form-control" name="name" required>
						<span>Your Name</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="email" required>
						<span for="">Your Email Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea name="" id="" class="form-control" name="msg" required></textarea>
						<span for="">Your Message</span>
						<span class="border"></span>
					</label>
					<button name="send">Send Mail 
						<i class="zmdi zmdi-arrow-right" ></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{
	$name  = $_POST['name'];
	$email = $_POST['email'];
	$msg   = $_POST['msg'];
	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shubhamsinghtradex@gmail.com';                     //SMTP username
    $mail->Password   = 'hkqywerbjsbsovld';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shubhamsinghtradex@gmail.com', 'Matrix');
    $mail->addAddress('subhamsingh108932@gmail.com', 'Master');     //Add a recipient
   // $mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nikola Tesla Industries Order';
    $mail->Body    = 'blah blah blah <b> blah! </b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<div class='success'>Mail Sent!</div>";
} catch (Exception $e) {
    echo "<div class='success'>Mail Couldn't be Sent!</div>";
}
}
?>