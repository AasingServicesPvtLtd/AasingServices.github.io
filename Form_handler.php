<?php
$name =$_POST['name'];
$visitor_mobile = $_POST['mobile'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='aasingservicespvtltd.com';
$email_subject = 'Name Form submission';

$email_body = "User nName: $name.\n".
                "User Mobile: $visitor_mobile.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to ='golus1675@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";
                
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>