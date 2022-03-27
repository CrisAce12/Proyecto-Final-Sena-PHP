<?php

    session_start();

    require('../models/noticia/noticiaDAO.php');
    require('../views/templates/header.php');

    $noticiaDao = new NoticiaDao();

    $noticias = $noticiaDao->listarNoticias();
    $articulos = $noticiaDao->listarArticulos();
    $tramites = $noticiaDao->listarTramites();

    if(isset($_SESSION["idUsuario"])){

        require('../models/historial/historialDAO.php');
        $historialDao = new HistorialDao();

        $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Noticias");

    }

    require('../views/noticia/indexUsuario.php');


    require('../views/templates/footer.php');

?>