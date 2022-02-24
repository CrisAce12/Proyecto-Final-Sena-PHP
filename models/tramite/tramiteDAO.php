<?php

    require('../controllers/db.php');
    require('tramiteVO.php');

    class TramiteDao{

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

        public function mostrarTramite(int $id_tramite){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_tramite, nombre_tramite, texto_tramite, id_requisito, id_articulo FROM tramite WHERE id_tramite = ?;");
                $preparedStatement->execute([$id_tramite]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarTramite($tramite){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_tramite = $tramite->getNombreTramite();
                $texto_tramite  = $tramite->getTextoTramite();
                $id_requisito = $tramite->getIdRequisito();
                $id_articulo = $tramite->getIdArticulo();

                $preparedStatement = $connection->prepare("INSERT INTO tramite (nombre_tramite,texto_tramite,id_requisito,id_articulo) VALUES ( ?,?,?,? );");
                $preparedStatement->execute([$nombre_tramite,$texto_tramite,$id_requisito,$id_articulo]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarTramite($tramite){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_tramite = $tramite->getIdTramite();
                $nombre_tramite = $tramite->getNombreTramite();
                $texto_tramite  = $tramite->getTextoTramite();
                $id_requisito = $tramite->getIdRequisito();
                $id_articulo = $tramite->getIdArticulo();

                $preparedStatement = $connection->prepare("UPDATE tramite SET nombre_tramite = ?, texto_tramite = ?, id_requisito = ?, id_articulo = ? WHERE id_tramite = ?;");
                $preparedStatement->execute([$nombre_tramite,$texto_tramite,$id_requisito,$id_articulo,$id_tramite]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarTramite(int $id_tramite){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM tramite WHERE id_tramite = ?;");
                $preparedStatement->execute([$id_tramite]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function listarRequisitos(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM requisitos;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

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

    }

?>