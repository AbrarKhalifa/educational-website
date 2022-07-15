<?php


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "USER NAME : $name.\n".
"User email : $visitor_email.\n".
"subject : $subject.\n".
"USER Message : $message.\n";


$to = 'abrarkhalifa63@gmail.com';
$headers = "From :$email_from \r\n";
$headers .= "Reply-to :$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")






?>