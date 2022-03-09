<?php 

    session_start();

    if(isset($_SESSION["Usuario2"])){



    }
    else{

        session_unset();
        session_destroy();
        header("Location:controller.php?accion=logout");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Home</h1>

    <p>Bienvenido <?= $_SESSION["Usuario2"]?></p>

    <a href="controller.php?accion=logout">Cerrar Sesión</a>

</body>
</html>