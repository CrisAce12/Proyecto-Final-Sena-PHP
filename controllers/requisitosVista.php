<?php

    session_start();

    require('../models/requisitos/requisitosDAO.php');
    require('../views/templates/header.php');

    $requisitosDao = new RequisitosDao();
    $requisitos = $requisitosDao->listarRequisitos();

    require('../views/requisitos/indexUsuario.php');


    require('../views/templates/footer.php');

?>