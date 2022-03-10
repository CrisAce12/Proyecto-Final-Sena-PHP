<?php

    session_start();

    require('../models/tramite/tramiteDAO.php');
    require('../views/templates/header.php');

    $tramiteDao = new TramiteDao();

    $tramites = $tramiteDao->listarTramites();
    $requisitos = $tramiteDao->listarRequisitos();
    $articulos = $tramiteDao->listarArticulos();

    require('../views/tramite/indexUsuario.php');


    require('../views/templates/footer.php');

?>