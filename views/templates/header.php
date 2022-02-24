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

                    <p>Código De Policía Ya!</p>

                </li>

                <li>

                    <form action="landingController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="inicio" hidden>
                        
                        <button type="submit">Inicio</button>

                    </form>

                </li>

                <li>

                    <form action="landingController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="libro" hidden>
                        
                        <button type="submit">Código</button>

                    </form>

                </li>

                <li>

                    <form action="landingController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="tramite" hidden>
                        
                        <button type="submit">Trámites</button>

                    </form>

                </li>        
                
                <li>

                    <form action="landingController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="noticia" hidden>
                        
                        <button type="submit">Noticias</button>

                    </form>

                </li>

                <li>

                    <form action="landingController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="usuario" hidden>
                        
                        <button type="submit">Usuario</button>

                    </form>

                </li>

                <li>

                    <form action="landingController.php" method="POST" class="busqueda">

                        <input type="text" id="accion" name="accion" value="buscar" hidden>
                        
                        <input type="text" name="busqueda" id="busqueda">

                        <button type="submit">Buscar</button>

                    </form>

                </li>

                <li>

                    <form action="landingController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="iniciarSesion" hidden>
                        
                        <button type="submit" class="iniciarSesion">Iniciar Sesión</button>

                    </form>

                </li>

            </ul>

        </nav>

    </header>