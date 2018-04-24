<?php

if( isset($_POST['submit']) ) {	
// Contact subject
$subject =$_POST["subject"]; 
// Details
$message=$_POST["detail"];

$name=$_POST["name"];
// Mail of sender
$mail_from=$_POST["mail"]; 
// From 
$header="from: $name <$mail_from>";

// Enter your email address
$to ='jmgaitan93@gmail.com';

$send_contact=mail($to,$subject,$message,$header);
}
// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>
