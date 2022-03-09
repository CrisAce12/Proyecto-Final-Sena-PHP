<?php

    session_start();

    require('../models/libro/libroDAO.php');
    require('../views/templates/header.php');

    $libroDao = new LibroDao();

    if(isset($_SESSION['usuario'])){

        if($_SESSION['t_usuario']==1){

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                $accion = strval($_POST["accion"]);
        
                if($accion == null){
        
                    $libros = $libroDao->listarLibros();
        
                    require('../views/libro/index.php');
        
                }
                elseif($accion == 'insertar'){
        
                    $arrayLibro = array(
        
                        "nombreLibro" => $_POST["nombreLibro"]
        
                    );
        
                    $libro = new Libro($arrayLibro);
        
                    $libroDao->insertarLibro($libro);
                    $libros = $libroDao->listarLibros();
        
                    require('../views/libro/index.php');
        
                }
                else if($accion=="actualizar"){
        
                    $arrayLibro = array(
        
                        "idLibro" => $_POST["idLibro"],
                        "nombreLibro" => $_POST["nombreLibro"]
        
                    );
        
                    $libro = new Libro($arrayLibro);
        
                    $libroDao->actualizarLibro($libro);
                    $libros = $libroDao->listarLibros();
                    
                    require("../views/libro/index.php");        
        
                }
        
            }else{
        
                $accion = strval($_GET["accion"]);
        
                if($accion == 'crear'){
        
                    $libros = $libroDao->listarLibros();
        
                    require('../views/libro/create.php');
        
                }
                elseif($accion == 'detalles'){
        
                    $id_libro = $_POST['idLibro'];
        
                    $libros = $libroDao->mostrarLibro($id_libro);
        
                    require('../views/libro/details.php');
        
                }
                elseif($accion == 'modificar'){
        
                    $id_libro = $_POST['idLibro'];
        
                    $libros = $libroDao->mostrarLibro($id_libro);
        
                    require('../views/libro/modify.php');
        
                }
                else if($accion=="eliminar"){
        
                    $id_libro = $_POST['idLibro'];
        
                    $libroDao->borrarlibro($id_libro);
        
                    $libros = $libroDao->listarLibros();
                    
                    require("../views/libro/index.php");        
        
                }
                else{
        
                    $libros = $libroDao->listarLibros();
        
                    require('../views/libro/index.php');
        
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