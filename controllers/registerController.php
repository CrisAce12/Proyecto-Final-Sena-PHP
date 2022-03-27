<?php

    session_start();

    require('../models/usuario/usuarioDAO.php');
    require('../views/templates/header.php');

    $usuarioDao = new UsuarioDao();

    if(isset($_SESSION['usuario'])){

        header('Location:landingController.php');

    }else{

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $accion = strval($_POST["accion"]);
    
            if($accion==null){
    
                require("../views/sesion/register/index.php");
    
            }
            elseif($accion="registrar"){

                if($_POST["correoUsuario"]==$_POST["correoUsuarioCONF"]&&$_POST["contraseñaUsuario"]==$_POST["contraseñaUsuarioCONF"]){

                    $arrayUsuario = array(
        
                        "nombreUsuario" => $_POST["nombreUsuario"],
                        "emailUsuario" => $_POST["correoUsuario"],
                        "contraseñaUsuario" => $_POST["contraseñaUsuario"],
                        "idTipoUsuario" => 2
            
                    );
            
                    $usuario = new Usuario($arrayUsuario);
    
                    $i = $usuarioDao->revisarDuplicado($usuario);
    
                    if($i == 0){
    
                        $usuarioDao->insertarUsuario($usuario);
    
                        header('Location:landingController.php');
    
                    }else{
    
                        header('Location:landingController.php');
    
                    }

                }
                else{

                    header("Location:registerController.php");

                }
    
            }
            else{

                header('Location:landingController.php');

            }
    
        }
        else{
            
            require("../views/sesion/register/index.php");
    
        }

    }

    require('../views/templates/footer.php');

?>