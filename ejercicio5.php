<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "ejercicio5BBDD.php";
   
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nombre = $_POST["nombre"];            
        $contraseña = $_POST["contraseña"];            
        $cuentaBancaria = $_POST["cuentaBancaria"];       
        $contraseña = password_hash($contraseña,PASSWORD_DEFAULT);
        insertaElemento($nombre,$contraseña,$cuentaBancaria);
    }
    ?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <p>Nombre: <input type="text" name="nombre" placeholder="Nombre"></p>
  <p>Contraseña: <input type="password" name="contraseña" placeholder="contraseña"></p>
  <p>Cuenta Bancaria: <input type="number" name="cuentaBancaria" placeholder="cuenta"></p>
  <p>Registrarse: <input type="submit" name="registro" placeholder="registro"></p>
  
</form>
</body>
</html>