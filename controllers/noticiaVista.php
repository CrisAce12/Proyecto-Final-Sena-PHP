<?php

    session_start();

    require('../models/noticia/noticiaDAO.php');
    require('../views/templates/header.php');

    $noticiaDao = new NoticiaDao();

    $noticias = $noticiaDao->listarNoticias();
    $articulos = $noticiaDao->listarArticulos();
    $tramites = $noticiaDao->listarTramites();

    require('../views/noticia/indexUsuario.php');


    require('../views/templates/footer.php');

?>