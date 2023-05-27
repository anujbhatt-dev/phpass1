<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
require 'PHPMailer/PHPMailer/src/Exception.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;
$mail->Username = 'anujbhatt023@gmail.com'; 
$mail->Password = 'ahhpjxcbysspuxgz'; 
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$to=$_POST['mail'];
$sub=$_POST['subj'];
$message=$_POST['msg'];
$mail->setFrom('anujbhatt023@gmail.com', 'Anuj Bhatt');
$mail->addAddress($to, 'Hello');

$mail->Subject =$sub;
$mail->Body = $message;

if ($mail->send()) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed. Error: " . $mail->ErrorInfo;
}
?>