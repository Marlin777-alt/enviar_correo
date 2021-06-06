<?php
$to = "alucar2627@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];
$contenido = "Nombre:". $nombre . "\nCorreo:". $correo . "\nTelefono:". $telefono . "\nAsunto:". $subject. "\nMensaje:". $message;

mail($to, $subject, $contenido);

?>