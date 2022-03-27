<?php

    session_start();

    require('../models/requisitos/requisitosDAO.php');
    require('../views/templates/header.php');

    $requisitosDao = new RequisitosDao();
    $requisitos = $requisitosDao->listarRequisitos();

    if(isset($_SESSION["idUsuario"])){

        require('../models/historial/historialDAO.php');
        $historialDao = new HistorialDao();

        $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Requisitos");

    }

    require('../views/requisitos/indexUsuario.php');


    require('../views/templates/footer.php');

?>