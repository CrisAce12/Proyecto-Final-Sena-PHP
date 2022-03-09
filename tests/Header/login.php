<?php

    session_start();

    if(isset($_SESSION["Usuario2"])){

        header("Location:controller.php");

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
    
    <h1>Iniciar Sesión</h1>

    <form action="controller.php" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="">
        <br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="">
        <br><br>

        <input type="submit" value="Iniciar Sesión">

    </form>

</body>
</html>