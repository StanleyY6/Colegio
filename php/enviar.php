<?php
    $destino ="hrivaslacayo@gmail.com";
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nTeléfono: " . $telefono ."\nCorreo: " . $correo . "\nAsunto: ". $asunto . "\nMensaje: " . $mensaje;

    mail($destino, $asunto , $contenido);
    header("location:index.html");
?>