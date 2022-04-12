<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->Host = 'smtp.gmail.com';  
    $mail->Port = 587; 
    $mail->Username = 'huytrannhat.900@gmail.com';
    $mail->Password = 'behfathpitjtczsv';  

    $mail->setFrom('huytrannhat.900@gmail.com', 'KenTinyhipooooooo');
    $mail->addAddress('huy.tran02102001@hcmut.edu.vn', 'Trần Nhật Huy');

    $mail->isHTML(true);
    $mail->Subject = 'Password recovery';
    $mail->Body = 'Mật khẩu nèeeeeee: ' . $randstring;
    $mail->AltBody = 'kocomatkhau';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}