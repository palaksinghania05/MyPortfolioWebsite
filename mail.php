<?php
//get data
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];
$to = "singhaniapalak2002@gmail.com";
$subject = "Mail from portfolio website";
$text = "Name = " . $name . "\r\nEmail = " . $email . "\r\n
Subject = " . $sub . "\r\nMessage = " . $message;
$headers = "From: noreply@portfolio.com";
if($email!=NULL){
    mail($to,$subject,$text,$headers);
}
//redirect
header("Location:index.html");
?>