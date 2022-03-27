<?php

    session_start();

    require('../models/requisitos/requisitosDAO.php');
    require('../views/templates/header.php');

    $requisitosDao = new RequisitosDao();

    if(isset($_SESSION['usuario'])){

        if($_SESSION['t_usuario']==1){

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                $accion = strval($_POST["accion"]);
        
                if($accion == null){
        
                    $requisitos = $requisitosDao->listarRequisitos();
        
                    require('../views/requisitos/index.php');
        
                }
                elseif($accion == 'insertar'){
        
                    $arrayRequisitos = array(
        
                        "nombreRequisito" => $_POST["nombreRequisito"],
                        "descripcionRequisito" => $_POST["descripcionRequisito"]
        
                    );
        
                    $requisito = new Requisitos($arrayRequisitos);
        
                    $requisitosDao->insertarRequisito($requisito);
                    $requisitos = $requisitosDao->listarRequisitos();
        
                    require('../views/requisitos/index.php');
        
                }
                else if($accion=="actualizar"){
        
                    $arrayRequisitos = array(
        
                        "idRequisito" => $_POST["idRequisitos"],
                        "nombreRequisito" => $_POST["nombreRequisito"],
                        "descripcionRequisito" => $_POST["descripcionRequisito"]
        
                    );
        
                    $requisito = new Requisitos($arrayRequisitos);
        
                    $requisitosDao->actualizarRequisito($requisito);
                    $requisitos = $requisitosDao->listarRequisitos();
                    
                    require("../views/requisitos/index.php");        
        
                }
        
            }else{
        
                $accion = strval($_GET["accion"]);
        
                if($accion == 'crear'){
        
                    $requisitos = $requisitosDao->listarRequisitos();
        
                    require('../views/requisitos/create.php');
        
                }
                elseif($accion == 'detalles'){
        
                    $id_requisitos = $_GET['idRequisitos'];
        
                    $requisitos = $requisitosDao->mostrarRequisito($id_requisitos);
        
                    require('../views/requisitos/details.php');
        
                }
                elseif($accion == 'modificar'){
        
                    $id_requisitos = $_GET['idRequisitos'];
        
                    $requisitos = $requisitosDao->mostrarRequisito($id_requisitos);
        
                    require('../views/requisitos/modify.php');
        
                }
                else if($accion=="eliminar"){
        
                    $id_requisitos = $_GET['idRequisitos'];
        
                    $requisitosDao->borrarRequisito($id_requisitos);
        
                    $requisitos = $requisitosDao->listarRequisitos();
                    
                    require("../views/requisitos/index.php");        
        
                }
                else{
        
                    $requisitos = $requisitosDao->listarRequisitos();
        
                    require('../views/requisitos/index.php');
        
                }
        
            }

            require('../models/historial/historialDAO.php');
            $historialDao = new HistorialDao();

            $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Gestionar Requisitos | Rol Administrador");

        }else{

            header('Location:landingController.php');

        }

    }
    else{

        header('Location:landingController.php');

    }

    

    require('../views/templates/footer.php');

?>