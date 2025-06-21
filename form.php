<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$email_from = 'info@visitdholpur.com';
$email_subject = 'new form submission';
$email_body = "User Name: $name.\n".
                "User Email: $name.\n".
                "Subject: $subject.\n".
                "User Message: $visitor_email.\n";


$to = 'pushkingaur@gmail.com';
$headers ="From: $email_from\r\n";
$headers ="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");






?>
