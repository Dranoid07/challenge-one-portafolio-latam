<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
    // Correo al que se enviará el formulario
    $destinatario = "manueldrtr9@gmail.com";
    
    // Construir el cuerpo del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    // Enviar el correo electrónico
    mail($destinatario, "Mensaje de formulario de contacto", $contenido);
    
    // Redireccionar al usuario a una página de éxito
    header("Location: gracias.html");
} else {
    // Si alguien intenta acceder directamente al archivo PHP, redirigirlo
    header("Location: index.html");
}
?>

