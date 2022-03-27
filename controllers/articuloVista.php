<?php

    session_start();

    require('../models/articulo/articuloDAO.php');
    require('../views/templates/header.php');

    $articuloDao = new ArticuloDao();

    $articulos = $articuloDao->listarArticulos();
    $titulos = $articuloDao->listarTitulos();
    $libros = $articuloDao->listarLibros();

    if(isset($_SESSION["idUsuario"])){

        require('../models/historial/historialDAO.php');
        $historialDao = new HistorialDao();

        $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Artículos");

    }

    require('../views/articulo/indexUsuario.php');


    require('../views/templates/footer.php');

?>