<?php

    session_start();

    require('../models/tramite/tramiteDAO.php');
    require('../views/templates/header.php');

    $tramiteDao = new TramiteDao();

    $tramites = $tramiteDao->listarTramites();
    $requisitos = $tramiteDao->listarRequisitos();
    $articulos = $tramiteDao->listarArticulos();

    if(isset($_SESSION["idUsuario"])){

        require('../models/historial/historialDAO.php');
        $historialDao = new HistorialDao();

        $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Trámites");

    }

    require('../views/tramite/indexUsuario.php');


    require('../views/templates/footer.php');

?>