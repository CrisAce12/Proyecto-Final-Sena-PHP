<?php

    session_start();

    require('../models/articulo/articuloDAO.php');

    $articuloDao = new ArticuloDao();

    if(isset($_SESSION['usuario'])){

        if($_SESSION['t_usuario']==1){

            require('../views/templates/header.php');

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                $accion = strval($_POST["accion"]);
        
                if($accion == null){
        
                    $articulos = $articuloDao->listarArticulos();
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/index.php');
        
                }
                elseif($accion == 'insertar'){
        
                    $arrayArticulo = array(
        
                        "nombreArticulo" => $_POST["nombreArticulo"],
                        "textoArticulo" => $_POST["textoArticulo"],
                        "estado" => $_POST["estado"],
                        "idTitulo" => $_POST["idTitulo"],
                        "idLibro" => $_POST["idLibro"]
        
                    );
        
                    $articulo = new Articulo($arrayArticulo);
        
                    $articuloDao->insertarArticulo($articulo);
                    $articulos = $articuloDao->listarArticulos();
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/index.php');
        
                }
                else if($accion=="actualizar"){
        
                    $arrayArticulo = array(
        
                        "idArticulo" => $_POST["idArticulo"],
                        "nombreArticulo" => $_POST["nombreArticulo"],
                        "textoArticulo" => $_POST["textoArticulo"],
                        "estado" => $_POST["estado"],
                        "idTitulo" => $_POST["idTitulo"],
                        "idLibro" => $_POST["idLibro"]
        
                    );
        
                    $articulo = new Articulo($arrayArticulo);
        
                    $articuloDao->actualizarArticulo($articulo);
                    $articulos = $articuloDao->listarArticulos();
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/index.php');        
        
                }
        
            }else{
        
                $accion = strval($_GET["accion"]);
        
                if($accion == 'crear'){
        
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/create.php');
        
                }
                elseif($accion == 'detalles'){
        
                    $id_articulo = $_GET['idArticulo'];
        
                    $articulos = $articuloDao->mostrarArticulo($id_articulo);
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/details.php');
        
                }
                elseif($accion == 'modificar'){
        
                    $id_articulo = $_GET['idArticulo'];
        
                    $articulos = $articuloDao->mostrarArticulo($id_articulo);
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/modify.php');
        
                }
                else if($accion=="eliminar"){
        
                    $id_articulo = $_GET['idArticulo'];
        
                    $articuloDao->borrarArticulo($id_articulo);
        
                    $articulos = $articuloDao->listarArticulos();
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
                    
                    require("../views/articulo/index.php");        
        
                }
                else{
        
                    $articulos = $articuloDao->listarArticulos();
                    $titulos = $articuloDao->listarTitulos();
                    $libros = $articuloDao->listarLibros();
        
                    require('../views/articulo/index.php');
        
                }
        
            }

        }
        else{

            header('Location:landingController.php');

        }

    }
    else{

        header('Location:landingController.php');

    }

    require('../views/templates/footer.php');

?>