<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include the PHPMailer autoloader
require __DIR__."/vendor/autoload.php";
// Create a new instance of PHPMailer
$mail = new PHPMailer(true);
// Set the mailer to use SMTP
$mail->isSMTP();
// Enable SMTP authentication
$mail->SMTPAuth = true;
// Enable debugging (comment out or set to SMTP::DEBUG_OFF for production)
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
// Set the hostname of the mail server (Gmail in this case)
$mail->Host = "smtp.gmail.com";
// Set the encryption type (tls)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// Set the SMTP port (587 for tls)
$mail->Port = 587;
// Set your Gmail username (replace with your actual Gmail address)
$mail->Username = "your@gmail.com";
// Set your Gmail password (replace with your actual App Password)
$mail->Password = "your-password";
// Set te email content type to HTML
$mail->isHTML(true);
// Return the configured PHPMailer object
return $mail;
?>
