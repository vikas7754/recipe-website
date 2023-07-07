<?php

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$name = $fname." ".$lname;

$email= $_POST['email'];

$country= $_POST['country'];
$message= $_POST['subject'];

$subject = "Mail From Website User";
$txt ="Name: ". $name . "\r\nEmail: " . $email . "\r\nCountry: " . $country . "\r\nMessage: \r\n" . $message;
$to = "freecodez77@gmail.com";
$headers = "From: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:contact-success.php");
}else{
    header("Location:contact-error.php");
}
?>