<?php

    session_start();

    require('../models/usuario/usuarioDAO.php');
    require('../models/favoritos/noticiasFavoritosDAO.php');
    require('../models/favoritos/tramitesFavoritosDAO.php');
    require('../models/favoritos/articulosFavoritosDAO.php');
    require('../views/templates/header.php');

    $usuarioDao = new UsuarioDao();
    $articulosFavoritosDao = new ArticuloFavoritoDao();
    $tramitesFavoritosDao = new TramiteFavoritoDao();
    $noticiasFavoritosDao = new NoticiaFavoritoDao();

    $articulosFavoritos = $articulosFavoritosDao->ListarFavoritos($_SESSION['idUsuario']);
    $tramitesFavoritos = $tramitesFavoritosDao->ListarFavoritos($_SESSION['idUsuario']);
    $noticiasFavoritos = $noticiasFavoritosDao->ListarFavoritos($_SESSION['idUsuario']);
    $usuarios = $usuarioDao->listarUsuarios();
    $roles = $usuarioDao->listarTiposUsuario();

    if(isset($_SESSION['usuario'])){

        $accion = $_GET["accion"];

        if(isset($_GET["idNoticia"])){

            $idNoticia = $_GET["idNoticia"];

            if($accion == "insertarFavorito"){
                
                $noticiasFavoritosDao->InsertarFavorito($_SESSION["idUsuario"],$idNoticia);
    
                header('Location:noticiaVista.php');
    
            }
            elseif($accion == "borrarFavorito"){
    
                $noticiasFavoritosDao->BorrarFavorito($idNoticia,$_SESSION["idUsuario"]);
    
                header('Location:usuarioVista.php');
    
            }

        }
        elseif(isset($_GET["idArticulo"])){

            $idArticulo = $_GET["idArticulo"];

            if($accion == "insertarFavorito"){
                
                $articulosFavoritosDao->InsertarFavorito($_SESSION["idUsuario"],$idArticulo);
    
                header('Location:libroVista.php');
    
            }
            elseif($accion == "borrarFavorito"){
    
                $articulosFavoritosDao->BorrarFavorito($_SESSION["idUsuario"],$idArticulo);
    
                header('Location:usuarioVista.php');
    
            }

        }
        elseif(isset($_GET["idTramite"])){

            $idTramite = $_GET["idTramite"];

            if($accion == "insertarFavorito"){
                
                $tramitesFavoritosDao->InsertarFavorito($_SESSION["idUsuario"],$idTramite);
    
                header('Location:tramiteVista.php');
    
            }
            elseif($accion == "borrarFavorito"){
    
                $tramitesFavoritosDao->BorrarFavorito($_SESSION["idUsuario"],$idTramite);
    
                header('Location:usuarioVista.php');
    
            }

        }
        else{

            require('../views/usuario/indexUsuario.php');

        }

    }
    else{

        header('Location:landingController.php');

    }

    require('../views/templates/footer.php');

?>