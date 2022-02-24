<?php

    require('../models/tipo_usuario/tipoUsuarioDAO.php');
    require('../views/templates/header.php');

    $tipoUsuarioDao = new TipoUsuarioDao();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST["accion"]);

        if($accion == null){

            $tipos = $tipoUsuarioDao->listarTiposUsuario();

            require('../views/tipo_usuario/index.php');

        }

        elseif($accion == 'crear'){

            require('../views/tipo_usuario/create.php');

        }

        elseif($accion == 'insertar'){

            $arrayTipoUsuario = array(

                "nombreTipoUsuario" => $_POST["nombreTipoUsuario"]

            );

            $tipo = new TipoUsuario($arrayTipoUsuario);

            $tipoUsuarioDao->insertarTipoUsuario($tipo);
            $tipos = $tipoUsuarioDao->listarTiposUsuario();

            require('../views/tipo_usuario/index.php');

        }

        elseif($accion == 'detalles'){

            $id_tusuario = $_POST['idTipoUsuario'];

            $tipos = $tipoUsuarioDao->mostrarTipoUsuario($id_tusuario);

            require('../views/tipo_usuario/details.php');

        }

        elseif($accion == 'modificar'){

            $id_tusuario = $_POST['idTipoUsuario'];

            $tipos = $tipoUsuarioDao->mostrarTipoUsuario($id_tusuario);

            require('../views/tipo_usuario/modify.php');

        }

        else if($accion=="actualizar"){

            $arrayTipoUsuario = array(

                "idTipoUsuario" => $_POST["idTipoUsuario"],
                "nombreTipoUsuario" => $_POST["nombreTipoUsuario"]

            );

            $tipo = new TipoUsuario($arrayTipoUsuario);

            $tipoUsuarioDao->actualizarTipoUsuario($tipo);
            $tipos = $tipoUsuarioDao->listarTiposUsuario();
            
            require("../views/tipo_usuario/index.php");        

        }

        else if($accion=="eliminar"){

            $id_tusuario = $_POST['idTipoUsuario'];

            $tipoUsuarioDao->borrarTipoUsuario($id_tusuario);

            $tipos = $tipoUsuarioDao->listarTiposUsuario();
            
            require("../views/tipo_usuario/index.php");        

        }

    }else{

        $tipos = $tipoUsuarioDao->listarTiposUsuario();

        require('../views/tipo_usuario/index.php');

    }   
    
    require('../views/templates/footer.php');

?>