<?php

    session_start();

    require('../models/usuario/usuarioDAO.php');
    require('../views/templates/header.php');

    $usuarioDao = new UsuarioDao();    

    if($_GET["accion"]=="logout"){

        session_unset();
        session_destroy();

        require "../views/sesion/login/index.php";

    }
    elseif(isset($_SESSION['usuario'])){

        header("Location:landingController.php");

    }else{

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $accion = strval($_POST["accion"]);
    
            if($accion="logear"){
    
                if(isset($_POST['correoUsuario'])&&isset($_POST['contraseñaUsuario'])){

                    $correo = $_POST['correoUsuario'];
                    $contraseña = $_POST['contraseñaUsuario'];

                    $usuario = $usuarioDao->validarUsuario($correo,$contraseña);

                    if($usuario!=null){

                        foreach ($usuario as $usuario) {
                            $_SESSION["usuario"] = $usuario->nombre;
                            $_SESSION["correo"] = $usuario->email;
                            $_SESSION["t_usuario"] = $usuario->id_tusuario;
                        };

                        header("Location:landingController.php");

                    }
                    else{

                        echo "El correo y/o la clave ingresadas son incorrectas";
                        require "../views/sesion/login/index.php";

                    }

                }
                else{

                    echo "El correo y/o la clave ingresadas son incorrectas";
                    require "../views/sesion/login/index.php";

                }               
    
            }else{

                require("../views/sesion/login/index.php");

            }
    
        }
        else{

            $accion = strval($_GET["accion"]);

            if($accion=="logout"){

                session_unset();
                session_destroy();

                require("../views/sesion/login/index.php");

            }else{

                require("../views/sesion/login/index.php");

            }
    
        }

    }    

    require('../views/templates/footer.php');

?>