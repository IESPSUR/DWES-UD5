<?php
$servidor = "localhost";
$basesDatos = "usuarios";
$usuario = "root";
$pass = "root";

function insertaElemento($nombre,$contraseña,$cuentaBancaria){
    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[basesDatos]",$GLOBALS['usuario'],$GLOBALS['pass']);
        $consulta = $conexion->prepare("INSERT INTO usuarios (nombre,contraseña,cuentaBancaria) VALUES (?,?,?)");
        $consulta->bindParam(1, $nombre);
        $consulta->bindParam(2, $contraseña);
        $consulta->bindParam(3, $cuentaBancaria);
        $consulta->execute();
        return $conexion->lastInsertId();
        $conexion = null;
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }
   }

?>