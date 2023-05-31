<?php
<if(isset($_post["send"])){
    require Hema_mail.php/'PHPMailerAutoload.PHPMailerAutoload.php';



$name = $_post["name"];
$email=$_post["email"];

$mail = new PHPMailer;

    $mail->SMTPDebug =4                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shema1712@gmail.com';                     //SMTP username
    $mail->Password   = 'Tvbelt@1712';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Test.Email');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient

    
    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'sample mail test';
    $mail->Body    = 'Name : ' .$name .'Email: ' .$email;
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>