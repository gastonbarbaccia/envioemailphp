<?php

$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
$headers .= "From: Prueba desde heroku < test@email.com >" . "\r\n";

 
mail($to,$subject, $message, $headers);

echo(1); 


?>