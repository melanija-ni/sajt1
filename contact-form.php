<?php
$name = $_POST['Ime'];
$visitior_email = $_POST['Email adresa'];
$message = $_POST['Poruka'];

$email_from = 'melmarknamestaj@gmail.com';
$email_subject ="New form submission";
$email_body = "User name:$name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = "melanija90@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="Reply-to:$visitor_email \r\n";
 mail ($to,$email_subject,$email_body,$headers);
 header("location: Kontakt.html");

            
?>