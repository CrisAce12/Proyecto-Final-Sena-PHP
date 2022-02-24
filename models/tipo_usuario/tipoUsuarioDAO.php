<?php

    require('../controllers/db.php');
    require('tipoUsuarioVO.php');

    class TipoUsuarioDao{

        public function listarTiposUsuario(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM tipo_usuario;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function mostrarTipoUsuario(int $id_tusuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_tusuario, nombre_tusuario FROM tipo_usuario WHERE id_tusuario = ?;");
                $preparedStatement->execute([$id_tusuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarTipoUsuario($tipo_usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_tusuario = $tipo_usuario->getNombreTipoUsuario();

                $preparedStatement = $connection->prepare("INSERT INTO tipo_usuario (nombre_tusuario) VALUES ( ? );");
                $preparedStatement->execute([$nombre_tusuario]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarTipoUsuario($tipo_usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_tusuario = $tipo_usuario->getIdTipoUsuario();
                $nombre_tusuario = $tipo_usuario->getNombreTipoUsuario();

                $preparedStatement = $connection->prepare("UPDATE tipo_usuario SET nombre_tusuario = ? WHERE id_tusuario = ?;");
                $preparedStatement->execute([$nombre_tusuario,$id_tusuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarTipoUsuario(int $id_tusuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM tipo_usuario WHERE id_tusuario = ?;");
                $preparedStatement->execute([$id_tusuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>