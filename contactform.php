<?php

$name = $_POST['name'];
$visitor_email = $POST['email'];
$message = $_POST['message'];

$email_from = "boomser1@hotmail.com"

$email_subject = "New Form Submission";

$email_body = "User name: $name.\n".
		"User Email: $visitor_email.\n".
		   User Message: $message.\n";


$to = "boomser1@hotmail.com;

$headers = "from: $email_from \r\n";

$headers .= "Reply-to: $vidistor_email \r\n;

mail($to,$email_suject,$email_body,$headers);

header("Location: index.html");
>
