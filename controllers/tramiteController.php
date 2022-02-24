<?php

    require('../models/tramite/tramiteDAO.php');
    require('../views/templates/header.php');

    $tramiteDao = new TramiteDao();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST["accion"]);

        if($accion == null){

            $tramites = $tramiteDao->listarTramites();

            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();

            require('../views/tramite/index.php');

        }

        elseif($accion == 'crear'){

            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();

            require('../views/tramite/create.php');

        }

        elseif($accion == 'insertar'){

            $arrayTramite = array(

                "nombreTramite" => $_POST["nombreTramite"],
                "textoTramite" => $_POST["textoTramite"],
                "idRequisito" => $_POST["idRequisito"],
                "idArticulo" => $_POST["idArticulo"]

            );

            $tramite = new Tramite($arrayTramite);
            
            $tramiteDao->insertarTramite($tramite);
            $tramites = $tramiteDao->listarTramites();

            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();

            require('../views/tramite/index.php');

        }

        elseif($accion == 'detalles'){

            $id_tramite = $_POST['idTramite'];

            $tramites = $tramiteDao->mostrarTramite($id_tramite);
            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();

            require('../views/tramite/details.php');

        }

        elseif($accion == 'modificar'){

            $id_tramite = $_POST['idTramite'];

            $tramites = $tramiteDao->mostrarTramite($id_tramite);
            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();

            require('../views/tramite/modify.php');

        }

        else if($accion=="actualizar"){

            $arrayTramite = array(

                "idTramite" => $_POST["idTramite"],
                "nombreTramite" => $_POST["nombreTramite"],
                "textoTramite" => $_POST["textoTramite"],
                "idRequisito" => $_POST["idRequisito"],
                "idArticulo" => $_POST["idArticulo"]
        
            );

            $tramite = new Tramite($arrayTramite);

            $tramiteDao->actualizarTramite($tramite);
            $tramites = $tramiteDao->listarTramites();

            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();
            
            require("../views/tramite/index.php");        

        }

        else if($accion=="eliminar"){

            $id_tramite = $_POST['idTramite'];

            $tramiteDao->borrarTramite($id_tramite);

            $tramites = $tramiteDao->listarTramites();

            $requisitos = $tramiteDao->listarRequisitos();
            $articulos = $tramiteDao->listarArticulos();
            
            require("../views/tramite/index.php");        

        }

    }else{

        $tramites = $tramiteDao->listarTramites();

        $requisitos = $tramiteDao->listarRequisitos();
        $articulos = $tramiteDao->listarArticulos();

        require('../views/tramite/index.php');

    }

    require('../views/templates/footer.php');

?>