<?php

    require('../models/titulo/tituloDAO.php');
    require('../views/templates/header.php');

    $tituloDao = new TituloDao();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST["accion"]);

        if($accion == null){

            $titulos = $tituloDao->listarLibros();
            $libros = $tituloDao->listarLibros();

            require('../views/titulo/index.php');

        }

        elseif($accion == 'crear'){

            $libros = $tituloDao->listarLibros();

            require('../views/titulo/create.php');

        }

        elseif($accion == 'insertar'){

            $arrayTitulo = array(

                "nombreTitulo" => $_POST["nombreTitulo"],
                "idLibro" => $_POST["idLibro"]

            );

            $titulo = new Titulo($arrayTitulo);

            $tituloDao->insertarTitulo($titulo);
            $titulos = $tituloDao->listarTitulos();
            $libros = $tituloDao->listarLibros();

            require('../views/titulo/index.php');

        }

        elseif($accion == 'detalles'){

            $id_titulo = $_POST['idTitulo'];

            $titulos = $tituloDao->mostrarTitulo($id_titulo);
            $libros = $tituloDao->listarLibros();

            require('../views/titulo/details.php');

        }

        elseif($accion == 'modificar'){

            $id_titulo = $_POST['idTitulo'];

            $titulos = $tituloDao->mostrarTitulo($id_titulo);
            $libros = $tituloDao->listarLibros();

            require('../views/titulo/modify.php');

        }

        else if($accion=="actualizar"){

            $arrayTitulo = array(

                "idTitulo" => $_POST["idTitulo"],
                "nombreTitulo" => $_POST["nombreTitulo"],
                "idLibro" => $_POST["idLibro"]

            );

            $titulo = new Titulo($arrayTitulo);

            $titulo = $tituloDao->actualizarTitulo($titulo);
            $titulos = $tituloDao->listarTitulos();
            $libros = $tituloDao->listarLibros();
            
            require("../views/titulo/index.php");        

        }

        else if($accion=="eliminar"){

            $id_titulo = $_POST['idTitulo'];

            $tituloDao->borrarTitulo($id_titulo);

            $titulos = $tituloDao->listarTitulos();
            $libros = $tituloDao->listarLibros();
            
            require("../views/titulo/index.php");        

        }

    }else{

        $titulos = $tituloDao->listarTitulos();
        $libros = $tituloDao->listarLibros();

        require('../views/titulo/index.php');

    }    

    require('../views/templates/footer.php');

?>