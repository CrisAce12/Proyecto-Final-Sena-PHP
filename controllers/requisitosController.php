<?php

    require('../models/requisitos/requisitosDAO.php');
    require('../views/templates/header.php');

    $requisitosDao = new RequisitosDao();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST["accion"]);

        if($accion == null){

            $requisitos = $requisitosDao->listarRequisitos();

            require('../views/requisitos/index.php');

        }

        elseif($accion == 'crear'){

            $requisitos = $requisitosDao->listarRequisitos();

            require('../views/requisitos/create.php');

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

        elseif($accion == 'detalles'){

            $id_requisitos = $_POST['idRequisito'];

            $requisitos = $requisitosDao->mostrarRequisito($id_requisitos);

            require('../views/requisitos/details.php');

        }

        elseif($accion == 'modificar'){

            $id_requisitos = $_POST['idRequisitos'];

            $requisitos = $requisitosDao->mostrarRequisito($id_requisitos);

            require('../views/requisitos/modify.php');

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

        else if($accion=="eliminar"){

            $id_requisitos = $_POST['idRequisito'];

            $requisitosDao->borrarRequisito($id_requisitos);

            $requisitos = $requisitosDao->listarRequisitos();
            
            require("../views/requisitos/index.php");        

        }

    }else{

        $requisitos = $requisitosDao->listarRequisitos();

        require('../views/requisitos/index.php');

    }

    require('../views/templates/footer.php');

?>