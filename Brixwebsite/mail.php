<?php
$to = "brixcarmelo@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: brixcarmelo@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>