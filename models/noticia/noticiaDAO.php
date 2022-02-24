<?php

    require('../controllers/db.php');
    require('noticiaVO.php');

    class NoticiaDao{

        public function listarNoticias(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM noticia;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function mostrarNoticia(int $id_noticia){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_noticia, nombre_notica, texto_noticia, fecha, estado, id_articulo, id_tramite FROM noticia WHERE id_noticia = ?;");
                $preparedStatement->execute([$id_noticia]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarNoticia($noticia){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_noticia = $noticia->getNombreNoticia();
                $texto_noticia = $noticia->getTextoNoticia();
                $fecha = $noticia->getFecha();
                $estado = $noticia->getEstado();
                $id_articulo = $noticia->getIdArticulo();
                $id_tramite = $noticia->getIdTramite();

                $preparedStatement = $connection->prepare("INSERT INTO noticia (nombre_notica,texto_noticia,fecha,estado,id_articulo,id_tramite) VALUES ( ?,?,?,?,?,? );");
                $preparedStatement->execute([$nombre_noticia,$texto_noticia,$fecha,$estado,$id_articulo,$id_tramite]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarNoticia($noticia){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_noticia = $noticia->getIdNoticia();
                $nombre_noticia = $noticia->getNombreNoticia();
                $texto_noticia = $noticia->getTextoNoticia();
                $fecha = $noticia->getFecha();
                $estado = $noticia->getEstado();
                $id_articulo = $noticia->getIdArticulo();
                $id_tramite = $noticia->getIdTramite();

                $preparedStatement = $connection->prepare("UPDATE noticia SET nombre_notica = ?, texto_noticia = ?, fecha = ?, estado = ? , id_articulo = ?, id_tramite = ? WHERE id_noticia = ?;");
                $preparedStatement->execute([$nombre_noticia,$texto_noticia,$fecha,$estado,$id_articulo,$id_tramite,$id_noticia]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarNoticia(int $id_noticia){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM noticia WHERE id_noticia = ?;");
                $preparedStatement->execute([$id_noticia]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function listarArticulos(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM articulo;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function listarTramites(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM tramite;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

    }

?>