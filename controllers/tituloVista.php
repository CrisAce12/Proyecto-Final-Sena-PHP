<?php

    session_start();

    require('../models/titulo/tituloDAO.php');
    require('../views/templates/header.php');

    $tituloDao = new TituloDao();

    $titulos = $tituloDao->listarTitulos();
    $libros = $tituloDao->listarLibros();

    if(isset($_SESSION["idUsuario"])){

        require('../models/historial/historialDAO.php');
        $historialDao = new HistorialDao();

        $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Títulos");

    }

    require('../views/titulo/indexUsuario.php');


    require('../views/templates/footer.php');

?>