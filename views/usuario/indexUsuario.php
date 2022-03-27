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

                
                
                <?php foreach($historial as $historial):?>

                    <tr><td><a href="
                    
                    <?php switch ($historial->url) {
                        
                        case 'Mi Cuenta':    
                            ?>usuarioVista.php<?php
                            break;

                        case 'Artículos':    
                            ?>libroVista.php<?php
                            break;

                        case 'Libros':    
                            ?>libroVista.php<?php
                            break;

                        case 'Títulos':    
                            ?>libroVista.php<?php
                            break;

                        case 'Trámites':    
                            ?>tramiteVista.php<?php
                            break;

                        case 'Requisitos':    
                            ?>requisitosVista.php<?php
                            break;

                        case 'Noticias':    
                            ?>noticiaVista.php<?php
                            break;

                        case 'Gestionar Libros | Rol Administrador':    
                            ?>libroController.php<?php
                            break;

                        case 'Gestionar Títulos | Rol Administrador':    
                            ?>tituloController.php<?php
                            break;

                        case 'Gestionar Artículos | Rol Administrador':    
                            ?>articuloController.php<?php
                            break;

                        case 'Gestionar Requisitos | Rol Administrador':    
                            ?>requisitosController.php<?php
                            break;

                        case 'Gestionar Noticias | Rol Administrador':    
                            ?>noticiaController.php<?php
                            break;

                        case 'Gestionar Roles | Rol Administrador':    
                            ?>tipoUsuarioController.php<?php
                            break;

                        case 'Gestionar Usuario | Rol Administrador':    
                            ?>usuarioVista.php<?php
                            break;

                    }?>
                    
                    "><?=$historial->url?></a></td></tr>

                <?php endforeach;?>

            </table>

        </div>

    </section>

</main>