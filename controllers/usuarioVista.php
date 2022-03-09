<?php

    session_start();

    require('../models/usuario/usuarioDAO.php');
    require('../views/templates/header.php');

    if(isset($_SESSION['usuario'])){

        require('../views/usuario/indexUsuario.php');

    }
    else{

        header('Location:landingController.php');

    }

    require('../views/templates/footer.php');

?>