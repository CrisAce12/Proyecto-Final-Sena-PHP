<?php

    session_start();

    require('../models/usuario/usuarioDAO.php');
    require('../views/templates/header.php');

    $usuarioDao = new UsuarioDao();

    $usuarios = $usuarioDao->listarUsuarios();
    $roles = $usuarioDao->listarTiposUsuario();

    if(isset($_SESSION['usuario'])){

        require('../views/usuario/indexUsuario.php');

    }
    else{

        header('Location:landingController.php');

    }

    require('../views/templates/footer.php');

?>