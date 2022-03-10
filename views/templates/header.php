<?php

    error_reporting(0);

?>

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

        <link rel="shortcut icon" href="../styles/images/logoSinTexto.png" type="image/x-icon">

    </head>

    <body>

    <header>

        <nav>

            

            <ul>

                <li>

                    <a class="nav-link" href="landingController.php?accion=inicio"><div></div></a>

                </li>

                <li>

                    <a class="nav-link" href="landingController.php?accion=inicio">Inicio</a>

                </li>

                <li>

                    <a class="nav-link" href="libroVista.php">Código</a>

                </li>

                <li>

                    <a class="nav-link" href="tramiteVista.php">Trámites</a>

                </li>
                
                <li>

                    <a class="" href="requisitosVista.php">Requisitos</a>

                </li>

                <li>

                    <a class="nav-link" href="noticiaVista.php">Noticias</a>

                </li>

                <li>

                    <form action="landingController.php" method="POST" class="busqueda">

                        <input type="text" id="accion" name="accion" value="buscar" hidden>
                        
                        <input type="text" name="busqueda" id="busqueda">

                        <button type="submit">Buscar</button>

                    </form>

                </li>

                <li>
                    
                    <?php if(isset($_SESSION["usuario"])):?>

                        <a class="cerrarSesion" href="loginController.php?accion=logout" class="cerrarSesion">Cerrar Sesión</a>


                    <?php else:?>

                        <a class="iniciarSesion" href="loginController.php" class="iniciarSesion">Inicar Sesión</a>

                    <?php endif;?>

                </li>


                <?php if(isset($_SESSION["usuario"])):?>

                <?php else:?>

                    <li>

                        <a class="registrarme" href="registerController.php" class="registrarme">Registrarme</a>

                    </li>

                <?php endif;?>

                <?php if(isset($_SESSION['usuario'])):?>

                <li>

                    <a class="miCuenta" href="usuarioVista.php">Mi Cuenta</a>

                </li>

                <?php endif;?>

            </ul>

            </div>

        </nav>

        <?php if(isset($_SESSION['usuario'])&&$_SESSION['t_usuario']==1):?>



            <nav class="navAdmin">
            

                <ul>

                    <li><p>Enlaces Administrador:</p></li>

                    <li>

                        <a class="nav-link" href="libroController.php">Libros</a>

                    </li>

                    <li>

                        <a class="nav-link" href="tituloController.php">Títulos</a>

                    </li>

                    <li>

                        <a class="nav-link" href="articuloController.php">Artículos</a>

                    </li>

                    <li>

                        <a class="nav-link" href="tramiteController.php">Trámites</a>

                    </li>

                    <li>

                        <a class="" href="requisitosController.php">Requisitos</a>

                    </li>

                    <li>

                        <a class="nav-link" href="noticiaController.php">Noticias</a>

                    </li>

                    <li>

                        <a class="" href="tipoUsuarioController.php">Tipo de Usuario</a>

                    </li>

                    <li>

                        <a class="" href="usuarioController.php">Usuarios</a>

                    </li>

                </ul>
                
            </nav>

        <?php endif;?>

    </header>