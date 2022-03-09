<?php

    $usuario = "Cristian";
    $contraseña = "123";
    $tusuario = 0;

    session_start();

    if($_GET['accion']=="logout"){

        session_unset();
        session_destroy();
        header("Location:login.php");

    }elseif(isset($_SESSION["Usuario2"])){

        header("Location:adminView.php");

    }elseif(isset($_POST['nombre'])&&isset($_POST['contraseña'])){

        if($_POST['nombre']==$usuario&&$_POST['contraseña']==$contraseña){

            $_SESSION["Usuario2"] = $usuario;
            header("Location:adminView.php");

        }else{

            header("Location:login.php");

        }

    }else{

        header("Location:login.php");

    }

?>

