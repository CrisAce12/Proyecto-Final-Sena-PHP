<?php

    session_start();

    require('../models/noticia/noticiaDAO.php');
    require('../views/templates/header.php');


    require('../views/noticia/indexUsuario.php');


    require('../views/templates/footer.php');

?>