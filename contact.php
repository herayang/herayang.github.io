<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject = $_POST['subject'];

$to = "herayang96@gmail.com";

 

$txt ="Name : ". $name . "\r\n  Email : "
    . $email ."\r\n subject". $subject. "\r\n Message :" . $message;
 
$headers = "From: ".$email;
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:contactMe.html");
?>
