<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    
    
    $mail = new PHPMailer(true);
    
    // $mail->isSMTP();
    // $mail->Host = 'smtp.hostinger.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'contact@villamasanori.fun';
    // $mail->Password = 'Kenneth@123';
    // $mail->SMTPSecure = 'tls';
    // $mail->Port = 587;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dentalclique13@gmail.com';
    $mail->Password = 'yamzabaczbemfzqb';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->setFrom('dentalclique13@gmail.com');
    
    $mail->addAddress($_POST["email"]);
    
    $mail->isHTML(true);
    
    $mail->Subject = $_POST["subject"];
    $mail->Body = "Thank you " . $_POST['name'] . " for contacting us! We'll get back to you as soon as possible. Please wait for our response";
    
    $mail->send();
    
    header('Location: index.php');
}
?>