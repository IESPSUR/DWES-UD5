<?php
    session_start();
    if ($_SESSION['perfil']=="") {
        header('Location: ejercicio6.php');
    }
    elseif ($_SESSION['perfil']=="admin") {
        header('Location: admin.php');
    }
    else  {
        echo "Hola pringao";
    }

?>