<!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa&family=Heebo&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../styles/css/header.css">
        <link rel="stylesheet" href="../styles/css/footer.css">

        <script src="../styles/js/index.js"></script>

    </head>

    <body>

    <header>

        <nav class="nav">

            <ul>

                <li>

                    <a href="landingController.php?accion=inicio">Código de Policía Ya!</a>

                </li>

                <li>

                    <a href="landingController.php?accion=inicio">Inicio</a>

                </li>

                <li>

                    <a href="articuloVista.php">Código</a>

                </li>

                <li>

                    <a href="tramiteVista.php">Trámites</a>

                </li>  
                
                <li>

                    <a href="noticiaVista.php">Noticias</a>

                </li>

                <?php if(isset($_SESSION['usuario'])):?>

                <li>

                    <a href="usuarioVista.php">Usuario</a>

                </li>

                <?php endif;?>

                <li>

                    <form action="landingController.php" method="POST" class="busqueda">

                        <input type="text" id="accion" name="accion" value="buscar" hidden>
                        
                        <input type="text" name="busqueda" id="busqueda">

                        <button type="submit">Buscar</button>

                    </form>

                </li>

                <li>
                    
                    <?php if(isset($_SESSION["usuario"])):?>

                        <a href="loginController.php?accion=logout">Cerrar Sesión</a>


                    <?php else:?>

                        <a href="loginController.php">Inicar Sesión</a>

                    <?php endif;?>

                </li>


                <?php if(isset($_SESSION["usuario"])):?>

                <?php else:?>

                    <li>

                        <a href="registerController.php">Registrarme</a>

                    </li>

                <?php endif;?>

            </ul>

        </nav>

    </header>