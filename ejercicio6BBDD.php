<?php
    $servidor = "localhost";
    $basesDatos = "usuarios";
    $usuario = "root";
    $password = "root";
    
    function getUser($user) {
        try {
            $conn = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[basesDatos]",$GLOBALS['usuario'],$GLOBALS['password']);
            $consulta=$conn->prepare("SELECT * FROM usuarios WHERE nombre = ?");
            $consulta->bindParam(1, $user);
            $consulta->execute();
            $conn = null;
            $user = $consulta->fetch(PDO::FETCH_ASSOC);
            return $user;
    
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
?>