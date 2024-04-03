<?php
    session_start();

    
    $allowed_countries = array('Mexico', 'Guatemala', 'Honduras','El Salvador','Salvador','Ecuador', 'Panama', 'Peru', 'Costa Rica'); 
    $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $geo = json_decode(file_get_contents("http://ip-api.com/json/{$user_ip}"));
    $country = $geo->country;

    if (!in_array($country, $allowed_countries)) {
        header('HTTP/1.0 403 Forbidden');
        echo "Sitio no encontrado.";
        exit;
    }
    header ('Location:https://dev-oswappsite.pantheonsite.io/');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
</head>
<body>
    <p style="color: #646464;font-family: sans-serif;">Cargando sitio web...</p>
    
</body>
</html>