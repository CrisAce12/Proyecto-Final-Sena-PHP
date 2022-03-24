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

        require('../views/usuario/indexUsuario.php');

    }
    else{

        header('Location:landingController.php');

    }

    require('../views/templates/footer.php');

?>