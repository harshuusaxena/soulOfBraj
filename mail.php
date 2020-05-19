<?php
$to ="publicemail545@gmail.com";
$subject = "noReply";
$message = "This mail come from soul of braj federation";
$headers = "From: info@soulofbrajfederation.org";

if (mail($to, $subject, $message, $headers)){
    echo "Mail has been sent";
}
else{
    echo "Mail has been not sent";
}
?>