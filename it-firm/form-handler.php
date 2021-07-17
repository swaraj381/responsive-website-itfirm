<?php
$name= $_POST['name']
$visitor_email= $_POST['email']
$expertise= $_POST['expertise']
$message= $_POST['message']

$email_from = 'info@ception.com'

$email_subject ='New Form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Expertise: $expertise.\n".
              "User Message: $message .\n";

$to = 'swaraj381@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: conatct.html");

?>