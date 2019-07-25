<?php

if (isset($_post['submit])) {
 $name = $_POST['name'];
 $mailFrom = $_POST['mail'];
 $phone = $_POST['phone'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

$mailTo = "boomser1@hotmail.com";
$headers = "From: ".$mailFrom;
$txt = "Your have received an email from".$name".\n\n".$message;

mail($mailto, $subject, $txt, $headers);
header("location: contact.html?mailsend");
}