<?php

    session_start();

    require('../models/noticia/noticiaDAO.php');
    require('../views/templates/header.php');

    $noticiaDao = new NoticiaDao();

    if(isset($_SESSION['usuario'])){

        if($_SESSION['t_usuario']==1){

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                $accion = strval($_POST["accion"]);
        
                if($accion == null){
        
                    $noticias = $noticiaDao->listarNoticias();
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
        
                    require('../views/noticia/index.php');
        
                }
                elseif($accion == 'insertar'){
        
                    $arrayNoticia = array(
        
                        "nombreNoticia" => $_POST["nombreNoticia"],
                        "textoNoticia" => $_POST["textoNoticia"],
                        "fecha" => $_POST["fecha"],
                        "estado" => $_POST["estado"],
                        "idArticulo" => $_POST["idArticulo"],
                        "idTramite" => $_POST["idTramite"]
        
                    );
        
                    $noticia = new Noticia($arrayNoticia);
        
                    $noticiaDao->insertarNoticia($noticia);
                    $noticias = $noticiaDao->listarNoticias();
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
        
                    require('../views/noticia/index.php');
        
                }
        
                
        
                else if($accion=="actualizar"){
        
                    $arrayNoticia = array(
        
                        "idNoticia" => $_POST["idNoticia"],
                        "nombreNoticia" => $_POST["nombreNoticia"],
                        "textoNoticia" => $_POST["textoNoticia"],
                        "fecha" => $_POST["fecha"],
                        "estado" => $_POST["estado"],
                        "idArticulo" => $_POST["idArticulo"],
                        "idTramite" => $_POST["idTramite"]
        
                    );
        
                    $noticia = new Noticia($arrayNoticia);
        
                    $noticiaDao->actualizarNoticia($noticia);
                    $noticias = $noticiaDao->listarNoticias();
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
                    
                    require("../views/noticia/index.php");        
        
                }
        
                
            }else{
        
                $accion = strval($_GET["accion"]);
        
                if($accion == 'crear'){
        
                    $noticias = $noticiaDao->listarNoticias();
        
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
        
                    require('../views/noticia/create.php');
        
                }
                elseif($accion == 'detalles'){
        
                    $id_noticia = $_GET['idNoticia'];
        
                    $noticias = $noticiaDao->mostrarNoticia($id_noticia);
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
        
                    require('../views/noticia/details.php');
        
                }
                elseif($accion == 'modificar'){
        
                    $id_noticia = $_GET['idNoticia'];
        
                    $noticias = $noticiaDao->mostrarNoticia($id_noticia);
        
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
        
                    require('../views/noticia/modify.php');
        
                }
                else if($accion=="eliminar"){
        
                    $id_noticia = $_GET['idNoticia'];
        
                    $noticiaDao->borrarNoticia($id_noticia);
        
                    $noticias = $noticiaDao->listarNoticias();
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
                    
                    require("../views/noticia/index.php");        
        
                }
                else{
                    
                    $noticias = $noticiaDao->listarNoticias();
                    $articulos = $noticiaDao->listarArticulos();
                    $tramites = $noticiaDao->listarTramites();
        
                    require('../views/noticia/index.php');
        
                }
        
            }   

            require('../models/historial/historialDAO.php');
            $historialDao = new HistorialDao();

            $historialDao->InsertarHistorial($_SESSION["idUsuario"],"Gestionar Noticias | Rol Administrador");

        }else{

            header('Location:landingController.php');

        }


    }
    else{

        header('Location:landingController.php');

    }

    

    require('../views/templates/footer.php');

?>