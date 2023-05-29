<?php


$email =$_POST['Email'];
$subject =$_POST['subject'];
$message =$_POST['Message'];
$to = "shema1712@gmail.com"
$subject="Mail From Website"

$headers ="From: ".$name. "\r\n" .
"cc: "
$text ="you have received an e-mail from ".$name ."\r\nEmail: ".$email .\r\n
Message: ".$message;


if($email!=NULL){
    mail($to, $subject, $txt, $headers);

    header('location:Thankyou.html');
    ?>