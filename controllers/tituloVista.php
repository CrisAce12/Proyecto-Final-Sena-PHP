<?php

    session_start();

    require('../models/titulo/tituloDAO.php');
    require('../views/templates/header.php');

    $tituloDao = new TituloDao();

    $titulos = $tituloDao->listarTitulos();
    $libros = $tituloDao->listarLibros();

    require('../views/titulo/indexUsuario.php');


    require('../views/templates/footer.php');

?>