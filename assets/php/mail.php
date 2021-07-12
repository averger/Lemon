<?php
//get data from contact form
$name = $_POST['name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "contact@agencelemon.com";

$subject = "Mail from a client";
//$txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Message = " . $message ."
//\r\n Mobile number = " . $number;

$txt = "Name = " . $name . "\r\n First Name = " . $first_name . "\r\n E-mail = " . $email ."
\r\n Message = " . $message;

$headers = "From: contact@agencelemon.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:./../../thankyou.html");
?>