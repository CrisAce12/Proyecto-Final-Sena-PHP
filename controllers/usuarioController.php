<?php

    require('../models/usuario/usuarioDAO.php');
    require('../views/templates/header.php');

    $usuarioDao = new UsuarioDao();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST["accion"]);

        if($accion == null){

            $usuarios = $usuarioDao->listarUsuarios();
    
            require('../views/usuario/index.php');
    
        }
    
        elseif($accion == 'crear'){
    
            $roles = $usuarioDao->listarTiposUsuario();
    
            require('../views/usuario/create.php');
    
        }
    
        elseif($accion == 'insertar'){
    
            $arrayUsuario = array(
    
                "nombreUsuario" => $_POST["nombre"],
                "emailUsuario" => $_POST["email"],
                "contraseñaUsuario" => $_POST["contraseña"],
                "idTipoUsuario" => $_POST["tipo_usuario"]
    
            );
    
            $usuario = new Usuario($arrayUsuario);
    
            $usuarioDao->insertarUsuario($usuario);
            $usuarios = $usuarioDao->listarUsuarios();
    
            require('../views/usuario/index.php');
    
        }
    
        elseif($accion == 'detalles'){
    
            $id_usuario = $_POST['idUsuario'];
    
            $usuarios = $usuarioDao->mostrarUsuario($id_usuario);
            $roles = $usuarioDao->listarTiposUsuario();
    
            require('../views/usuario/details.php');
    
        }
    
        elseif($accion == 'modificar'){
    
            $id_usuario = $_POST['idUsuario'];
    
            $usuarios = $usuarioDao->mostrarUsuario($id_usuario);
            $roles = $usuarioDao->listarTiposUsuario();
    
            require('../views/usuario/modify.php');
    
        }
    
        else if($accion=="actualizar"){
    
            $arrayUsuario = array(
    
                "idUsuario" => $_POST["idUsuario"],
                "nombreUsuario" => $_POST["nombre"],
                "emailUsuario" => $_POST["email"],
                "contraseñaUsuario" => $_POST["contraseña"],
                "idTipoUsuario" => $_POST["tipo_usuario"]
        
            );
    
            $usuario = new Usuario($arrayUsuario);
    
            $usuarioDao->actualizarUsuario($usuario);
            $usuarios = $usuarioDao->listarUsuarios();
            
            require("../views/usuario/index.php");        
    
        }
    
        else if($accion=="eliminar"){
    
            $id_usuario = $_POST['idUsuario'];
    
            $usuarioDao->borrarUsuario($id_usuario);
    
            $usuarios = $usuarioDao->listarUsuarios();
            
            require("../views/usuario/index.php");        
    
        }

    }else{

        $usuarios = $usuarioDao->listarUsuarios();
    
        require('../views/usuario/index.php');

    }

    require('../views/templates/footer.php');

?>