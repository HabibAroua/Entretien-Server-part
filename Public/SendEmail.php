<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "habib.aroua@sesame.com.tn";
    
    $mail->SetFrom("$from", "$from");
    $mail->AddAddress("$to");
    
    $mail->Subject = "$subject";
    $mail->Body = "$message";
    $mail->Send();
?>