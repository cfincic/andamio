
<?php
// El mensaje
$mensaje = "Línea 1 ESTE ES UN MENSAJE DE PRUEBA\r\nLínea 2 PARA VER SI SE ENVIA EL MAIL\r\nLínea 3 CONFIRMAME POR WHATSAPP SI TE LLEGA";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

$cabeceras = 'From: probando@ando.com' . "\r\n" .
    'Reply-To: probando@ando.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send
mail('molivar@andamio90.edu.ar', 'Mi título', $mensaje, $cabeceras);
?>

