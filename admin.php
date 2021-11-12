<?php
    session_start();
    if ($_SESSION['perfil']=="") {
        header('Location: ejercicio6.php');
    }
    elseif ($_SESSION['perfil']=="usuario") {
        header('Location: usuario.php');
    }
    else  {
        echo "Eres el jefe supremo";
    }

?>