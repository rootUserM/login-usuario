<?php

//llamando a los campos
$destino = "oli_bautista_bello@hotmail.com";//correo al que se va a enviar
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$texto = $_POST["texto"];

//datos para el correo
$asunto = "Prueba de correo";

$carta = "De: " . $nombre . "\nCorreo: " . $email . "\nTelefono " . $telefono . "\nComentario: " . $texto;

//Enviando mensaje

mail($destino, $asunto, $carta);
header("location:gracias.html")

?>