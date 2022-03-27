<?php

    session_start();

    require('../models/tramite/tramiteDAO.php');
    require('../views/templates/header.php');

    $tramiteDao = new TramiteDao();

    $tramites = $tramiteDao->listarTramites();
    $requisitos = $tramiteDao->listarRequisitos();
    $articulos = $tramiteDao->listarArticulos();

    if(isset($_SESSION['usuario'])){

        if($_SESSION['t_usuario']==1){

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                $accion = strval($_POST["accion"]);
        
                if($accion == null){
        
                    require('../views/tramite/index.php');
        
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
        
                    require('../views/tramite/index.php');
        
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
                    
                    require("../views/tramite/index.php");        
        
                }
        
            }else{
        
                $accion = strval($_GET["accion"]);
        
                if($accion == null){
        
                    require('../views/tramite/index.php');
        
                }
                elseif($accion == 'crear'){
        
                    require('../views/tramite/create.php');
        
                }
                elseif($accion == 'detalles'){
        
                    $id_tramite = $_GET['idTramite'];
        
                    $tramites = $tramiteDao->mostrarTramite($id_tramite);
        
                    require('../views/tramite/details.php');
        
                }
                elseif($accion == 'modificar'){
        
                    $id_tramite = $_GET['idTramite'];
        
                    $tramites = $tramiteDao->mostrarTramite($id_tramite);
        
                    require('../views/tramite/modify.php');
        
                }
                else if($accion=="eliminar"){
        
                    $id_tramite = $_GET['idTramite'];
        
                    $tramiteDao->borrarTramite($id_tramite);
                    
                    require("../views/tramite/index.php");        
        
                }
                else{
        
                    require('../views/tramite/index.php');
        
                }        
        
            }

            require('../models/historial/historialDAO.php');
            $historialDao = new HistorialDao();

            $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Gestionar Trámites | Rol Administrador");

        }
        else{

            header("Location:tramiteVista.php");

        }
        
    }
    else{

        header("Location:landingController.php");

    }

    require('../views/templates/footer.php');

?>