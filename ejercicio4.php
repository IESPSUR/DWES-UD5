<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Función</td>
            <td>Valores</td>
        </tr>
        <tr>
            <td>session.use_cookies</td>
            <td>Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente.</td>
            <td>Por defecto es 1 (habilitado) depende de true o false</td>
        </tr>
        <tr>
            <td>session.use_only_cookies</td>
            <td>Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente</td>
            <td>Por defecto es 1 (habilitado) depende de true o false</td>
        </tr>
        <tr>
            <td>session.save_handler</td>
            <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión</td>
            <td>Por defecto es files</td>
        </tr>
        <tr>
            <td>session.name</td>
            <td>Especifica el nombre de la sesión que se usa como nombre de cookie</td>
            <td>Por defecto es PHPSESSID</td>
        </tr>
        <tr>
            <td>session.auto_start</td>
            <td>especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>
            <td>Por defecto es 0 (deshabilitado)puede estar a 1 (habilitado)</td>
        </tr>
        <tr>
            <td>session.cookie_lifetime</td>
            <td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador.</td>
            <td>El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0.</td>
        </tr>
        <tr>
            <td>session.gc_maxlifetime</td>
            <td>Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada</td>
            <td>El valor predeterminado es 1440 minutos</td>
        </tr>
    </table>
</body>
</html>