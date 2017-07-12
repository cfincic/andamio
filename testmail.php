<?php 

$to = 'cfincic@gmail.com'; 
$email_subject = "Website Contact Form";
$email_body = "You have received a new message from your website ";
$headers = "From: noreply@gmail.com\n";
$headers .= "Reply-To: probando@mail.com";	
mail($to,$email_subject,$email_body,$headers);
echo("se envio?");
?>
