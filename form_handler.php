<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'abc@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "user Name: $name.\n".
"user email: $visitor_email.\n".
"subject: $subject.\n".
"user message: $message.\n".

$to = 'akshitasaxena38@gmail.com';
$header = "From: $email_from \r\n";
$header .= "Reply-To $visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("Location: contact.html");
?>