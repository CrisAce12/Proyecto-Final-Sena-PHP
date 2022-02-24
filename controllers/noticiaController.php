<?php

    require('../models/noticia/noticiaDAO.php');
    require('../views/templates/header.php');

    $noticiaDao = new NoticiaDao();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST["accion"]);

        if($accion == null){

            $noticias = $noticiaDao->listarNoticias();
            $articulos = $noticiaDao->listarArticulos();
            $tramites = $noticiaDao->listarTramites();

            require('../views/noticia/index.php');

        }

        elseif($accion == 'crear'){

            $noticias = $noticiaDao->listarNoticias();

            $articulos = $noticiaDao->listarArticulos();
            $tramites = $noticiaDao->listarTramites();

            require('../views/noticia/create.php');

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

        elseif($accion == 'detalles'){

            $id_noticia = $_POST['idNoticia'];

            $noticias = $noticiaDao->mostrarNoticia($id_noticia);
            $articulos = $noticiaDao->listarArticulos();
            $tramites = $noticiaDao->listarTramites();

            require('../views/noticia/details.php');

        }

        elseif($accion == 'modificar'){

            $id_noticia = $_POST['idNoticia'];

            $noticias = $noticiaDao->mostrarNoticia($id_noticia);

            $articulos = $noticiaDao->listarArticulos();
            $tramites = $noticiaDao->listarTramites();
            $articulos = $noticiaDao->listarArticulos();
            $tramites = $noticiaDao->listarTramites();

            require('../views/noticia/modify.php');

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

        else if($accion=="eliminar"){

            $id_noticia = $_POST['idNoticia'];

            $noticiaDao->borrarNoticia($id_noticia);

            $noticias = $noticiaDao->listarNoticias();
            $articulos = $noticiaDao->listarArticulos();
            $tramites = $noticiaDao->listarTramites();
            
            require("../views/noticia/index.php");        

        }

    }else{

        $noticias = $noticiaDao->listarNoticias();
        $articulos = $noticiaDao->listarArticulos();
        $tramites = $noticiaDao->listarTramites();

        require('../views/noticia/index.php');

    }

    require('../views/templates/footer.php');

?>