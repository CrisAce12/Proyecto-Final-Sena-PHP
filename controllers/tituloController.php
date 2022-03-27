<?php

    session_start();

    require('../models/titulo/tituloDAO.php');
    require('../views/templates/header.php');

    $tituloDao = new TituloDao();

    if(isset($_SESSION['usuario'])){

        if($_SESSION['t_usuario']==1){

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                $accion = strval($_POST["accion"]);
        
                if($accion == null){
        
                    $titulos = $tituloDao->listarLibros();
                    $libros = $tituloDao->listarLibros();
        
                    require('../views/titulo/index.php');
        
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
        
            }else{
        
                $accion = strval($_GET["accion"]);
        
                if($accion == 'crear'){
        
                    $libros = $tituloDao->listarLibros();
        
                    require('../views/titulo/create.php');
        
                }
                elseif($accion == 'detalles'){
        
                    $id_titulo = $_GET['idTitulo'];
        
                    $titulos = $tituloDao->mostrarTitulo($id_titulo);
                    $libros = $tituloDao->listarLibros();
        
                    require('../views/titulo/details.php');
        
                }
                elseif($accion == 'modificar'){
        
                    $id_titulo = $_GET['idTitulo'];
        
                    $titulos = $tituloDao->mostrarTitulo($id_titulo);
                    $libros = $tituloDao->listarLibros();
        
                    require('../views/titulo/modify.php');
        
                }
                else if($accion=="eliminar"){
        
                    $id_titulo = $_GET['idTitulo'];
        
                    $tituloDao->borrarTitulo($id_titulo);
        
                    $titulos = $tituloDao->listarTitulos();
                    $libros = $tituloDao->listarLibros();
                    
                    require("../views/titulo/index.php");        
        
                }
                else{
        
                    $titulos = $tituloDao->listarTitulos();
                    $libros = $tituloDao->listarLibros();
            
                    require('../views/titulo/index.php');
        
                }
        
            }

            require('../models/historial/historialDAO.php');
            $historialDao = new HistorialDao();

            $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Gestionar Títulos | Rol Administrador");

        }else{

            header('Location:landingController.php');

        }

    }else{

        header('Location:landingController.php');

    }

    require('../views/templates/footer.php');

?>