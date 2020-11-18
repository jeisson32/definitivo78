<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST["mensaje"];

$destino="jeissiton18@gmail.com";
$asunto="contacto desde la  pagina de buenos aires";

$carta="De: $nombre \n";
$carta .="Correo: $correo \n";
$carta .="Telefono: $telefono \n";
$carta .="Mensaje: $mensaje";

mail($destino, $asunto, $carta);
header('location:enviado.html')
?>
