<?php

$name = $_POST['fullname'];
$mobno = $_POST['mobnum'];
$date = $_POST['date'];
$time = $_POST['time'];


$to = "gkk.babu@yahoo.com";
$subject = "Appointment Request";
$headers = 'MIME-Version: 1.0';
$headers = 'Content-type: text/html; charset=iso-8859-1';

$body = "Do not reply test message";


mail($to,$subject,$body,$headers);

echo 'Message sent! <a href="index.html"> Click here</a> to send another email';
?>
