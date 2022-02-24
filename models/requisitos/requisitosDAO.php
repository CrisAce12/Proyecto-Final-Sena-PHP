<?php

    require('../controllers/db.php');
    require('requisitosVO.php');

    class RequisitosDao{

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

        public function mostrarRequisito(int $id_requisito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_requisito, nombre_requisito, descripcion_requisito FROM requisitos WHERE id_requisito = ?;");
                $preparedStatement->execute([$id_requisito]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarRequisito($requisito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_requisito = $requisito->getNombreRequisito();
                $descripcion_requisito  = $requisito->getDescripcionRequisito();

                $preparedStatement = $connection->prepare("INSERT INTO requisitos (nombre_requisito,descripcion_requisito) VALUES ( ?,? );");
                $preparedStatement->execute([$nombre_requisito,$descripcion_requisito]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarRequisito($requisito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_requisito = $requisito->getIdRequisito();
                $nombre_requisito = $requisito->getNombreRequisito();
                $descripcion_requisitoro  = $requisito->getDescripcionRequisito();

                $preparedStatement = $connection->prepare("UPDATE requisitos SET nombre_requisito = ?, descripcion_requisito = ? WHERE id_requisito = ?;");
                $preparedStatement->execute([$nombre_requisito,$descripcion_requisitoro,$id_requisito]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarRequisito(int $id_requisito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM requisitos WHERE id_requisito = ?;");
                $preparedStatement->execute([$id_requisito]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>