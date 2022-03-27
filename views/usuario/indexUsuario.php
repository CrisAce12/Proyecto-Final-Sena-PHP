<head>

    <link rel="stylesheet" href="../styles/css/indexUsuario.css">
    <link rel="stylesheet" href="../styles/css/usuario/usuario.css">

    <title>Código De Policía Ya! | Usuario</title>

</head>

<main>

    <section>

        <div class="usuarioDiv">

            <h1>Datos de Usuario</h1>

            <table>

                <tr>

                    <td>Nombre: <?=$_SESSION['usuario']?></td>

                </tr>

                <tr>

                    <td>Correo Electrónico: <?=$_SESSION['correo']?></td>

                </tr>

                <tr>

                    <td>Tipo de Usuario: <?php if($_SESSION['usuario']==2){echo "Administrador";}else{ echo "Usuario";}?></td>

                </tr>

            </table>

        </div>

        <div class="favoritosDiv">

            <h1>Favoritos</h1>

            <table>

                <?php foreach($noticiasFavoritos as $noticiaFavorito):?>

                    <tr>

                        <td><a href="noticiaVista.php">Noticia #<?=$noticiaFavorito->idNoticia?></a></td>
                        <td><button><a class="eliminar" href="usuarioVista.php?accion=borrarFavorito&idNoticia=<?=$noticiaFavorito->idNoticia?>">Eliminar</a></button></td>

                    </tr>

                <?php endforeach;?>

                <?php foreach($articulosFavoritos as $articuloFavorito):?>

                    <tr>

                        <td><a href="libroVista.php">Artículo #<?=$articuloFavorito->idArticulo?></a></td>
                        <td><button><a class="eliminar" href="usuarioVista.php?accion=borrarFavorito&idArticulo=<?=$articuloFavorito->idArticulo?>">Eliminar</a></button></td>

                    </tr>

                <?php endforeach;?>

                <?php foreach($tramitesFavoritos as $tramiteFavorito):?>

                    <tr>

                        <td><a href="tramiteVista.php">Trámite #<?=$tramiteFavorito->idTramite?></a></td>
                        <td><button><a class="eliminar" href="usuarioVista.php?accion=borrarFavorito&idTramite=<?=$tramiteFavorito->idTramite?>">Eliminar</a></button></td>

                    </tr>

                <?php endforeach;?>

            </table>

        </div>

        <div class="historialDiv">

            <h1>Historial</h1>

            <table>

                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                <tr><td><a href="">Ejemplo Historial</a></td></tr>
                

            </table>

        </div>

    </section>

</main>