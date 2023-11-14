<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email-from = 'aadil882002@gmail.com';

$email_subject = 'New Form For Submission'

$email_body = "USER NAME : $name.\n". 
"USER EMAIL : $email.\n". 
"USER SUBJECT : $subject.\n". 
"USER MESSAGE : $subject.\n".; 

$to = 'aadil882002@gmail.com'

$headers= "From : $email-from \r\n";
$headers= "Reply-To : $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>