<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 
$email = $_POST['email'];

try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'sharad.adelkar@gmail.com';				 
	$mail->Password = 'Silver_1982';						 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('sharad.adelkar@gmail.com', 'Srushti');		 
	$mail->addAddress($email); 
	 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Signup confirmation for Vacation'; 
	$mail->Body = 'message:<b>Kindly confirm the signup activity for Vacation web portal</b> '; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
