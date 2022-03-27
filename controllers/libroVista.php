<?php

    session_start();

    require('../models/libro/libroDAO.php');
    require('../views/templates/header.php');

    $libroDao = new LibroDao();
    $libros = $libroDao->listarLibros();

    if(isset($_SESSION["idUsuario"])){

        require('../models/historial/historialDAO.php');
        $historialDao = new HistorialDao();

        $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Libros");

    }

    require('../views/libro/indexUsuario.php');

    require('../views/templates/footer.php');

?>