<?php
$subject ="$subject"; 

$message="$detail";


$mail_from="$customer_mail"; 

$header="from: $name <$mail_from>";


$to ='jmgaitan93@gmail.com';

$send_contact=mail($to,$subject,$message,$header);


if($send_contact){
echo "Mensaje enviado exitosamente";
}
else {
echo "ERROR";
}
?>