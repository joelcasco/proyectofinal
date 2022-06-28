<?php
$nombre = $_POST['nmame'];
$telefono = $_POST['telefono'];
$email = $_POST['email']
$mensaje = $_POST['textarea']

$mensaje = "Mensaje enviado por " .$nombre . "\r\n";
$mensaje .= "Su email es: " . $email ." \r\n";
$mensaje .= "Su numero telefonico es: " . $telefono ." \r\n";
$mensaje .= "Mensaje " . $_POST['textarea'] . " \r\n";

$para = "Franco.110@outlook.es";
$asunto = "Mensaje enviado a travez de la web";

email($para, $asunto, utf8_decode($mensaje));
header("Location:exito.html");

?>


