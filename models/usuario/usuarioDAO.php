<?php

    require('../controllers/db.php');
    require('usuarioVO.php');

    class UsuarioDao{

        public function listarUsuarios(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM usuario;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function mostrarUsuario(int $id_usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_usuario, nombre, email, contraseña, id_tusuario FROM usuario WHERE id_usuario = ?;");
                $preparedStatement->execute([$id_usuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function insertarUsuario($usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre = $usuario->getNombre();
                $email  = $usuario->getEmail();
                $contraseña = $usuario->getContraseña();
                $id_tusuario = $usuario->getIdTipoUsuario();

                $preparedStatement = $connection->prepare("INSERT INTO usuario (nombre,email,contraseña,id_tusuario) VALUES ( ?,?,?,? );");
                $preparedStatement->execute([$nombre,$email,$contraseña,$id_tusuario]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarUsuario($usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_usuario = $usuario->getIdUsuario();
                $nombre = $usuario->getNombre();
                $email  = $usuario->getEmail();
                $contraseña = $usuario->getContraseña();
                $id_tusuario = $usuario->getIdTipoUsuario();

                $preparedStatement = $connection->prepare("UPDATE usuario SET nombre = ?, email = ?, contraseña = ?, id_tusuario = ? WHERE id_usuario = ?;");
                $preparedStatement->execute([$nombre,$email,$contraseña,$id_tusuario,$id_usuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarUsuario(int $id_usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM usuario WHERE id_usuario = ?;");
                $preparedStatement->execute([$id_usuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

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

    }

?>