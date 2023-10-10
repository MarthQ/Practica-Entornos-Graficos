<?php
$to = "bocacampeon@yahoo.com";
$subject = "EMail html";
$message = "
<html>
<body>
<h1>Prueba envio email html con php</h1>
<p>Parrafo de prueba.</p>
</body><
/html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: jose@example.com" . "\r\n";
$headers .= "Cc: bocacampeon@yahoo.com" . "\r\n";
mail($to,$subject,$message,$headers);
?>