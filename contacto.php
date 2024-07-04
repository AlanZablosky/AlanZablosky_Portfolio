<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mensaje = htmlspecialchars(trim($_POST["mensaje"]));
    $asunto = htmlspecialchars(trim($_POST["asunto"]));

    $max_nombre = 50;
    $max_email = 100;
    $max_mensaje = 500;
    $max_asunto = 100;

    if (strlen($nombre) > $max_nombre) {
        $nombre = substr($nombre, 0, $max_nombre);
}

    if (strlen($email) > $max_email) {
        $email = substr($email, 0, $max_email);
}

    if (strlen($mensaje) > $max_mensaje) {
        $mensaje = substr($mensaje, 0, $max_mensaje);
}   

    if (strlen($asunto) > $max_mensaje) {
        $asunto = substr($asunto, 0, $max_asunto);
}

    // Aquí agregamos el código para enviar el correo electrónico
    $destinatario = "alan_zablosky@hotmail.com"; 
    $asunto_email = "Nuevo mensaje con asunto: ". $asunto;
    
    $contenido = "Nombre: " . $nombre . "\r\n";
    $contenido .= "Asunto: " . $asunto . "\r\n";
    $contenido .= "Mensaje: " . $mensaje;
    
    // Configurar encabezados adicionales
    $headers = "From: no-reply@tudominio.com" . "\r\n";
    $headers .= "Reply-To: " . $nombre . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Enviar el correo electrónico
    if (mail($destinatario, $asunto_email, $contenido, $headers)) {
        echo "<script> alert('Mensaje enviado con éxito.'); </script>";
    } else {
        echo "<script> alert('Error al enviar el mensaje. Intente nuevamente.'); </script>";
    }
    
} 

?>