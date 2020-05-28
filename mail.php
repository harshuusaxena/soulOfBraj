<?php

require( 'phpmailer/PHPMailerAutoload.php');
    
    $mail = new PHPMailer;
    $mail->IsSMTP();

    $mail->SMTPDebug= 1;
    $mail->Host = 'mail.soulofbrajfederation.org';
    $mail->Port = 587;
    $mail->SMTPAuth=false;
    $mail->SMTPSecure='tls';
    
    $mail->Username = 'soulofbrajfederationorg@gmail.com';
    $mail->Password = 'tanu6670';
    
    $mail->setFrom('info@soulofbrajfederation.org','Soul Of Braj Federation');
    $mail->addAddress('soulofbrajfederationorg@gmail.com');
    
    $mail->isHTML(true);
    $mail->Subject="Donation form info from gateway page";
    $mail->Body="<h1>Hii, this is testing mail.</h1>";

if(!$mail-> send()){
echo "<script>alert('fail');</script>". $mail->ErrorInfo;
}
else{
    echo "<script>alert('success');</script>";
}

?>