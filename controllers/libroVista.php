<?php

    session_start();

    require('../models/libro/libroDAO.php');
    require('../views/templates/header.php');

    $libroDao = new LibroDao();
    $libros = $libroDao->listarLibros();

    require('../views/libro/indexUsuario.php');


    require('../views/templates/footer.php');

?>