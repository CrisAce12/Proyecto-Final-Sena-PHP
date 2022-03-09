<?php

    require('../controllers/db.php');
    require('tituloVO.php');

    class TituloDao{

        public function listarTitulos(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM titulo;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function mostrarTitulo(int $id_titulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_titulo, nombre_titulo, id_libro FROM titulo WHERE id_titulo = ?;");
                $preparedStatement->execute([$id_titulo]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarTitulo($titulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_titulo = $titulo->getNombreTitulo();
                $id_libro  = $titulo->getIdLibro();

                $preparedStatement = $connection->prepare("INSERT INTO titulo (nombre_titulo,id_libro) VALUES ( ?,? );");
                $preparedStatement->execute([$nombre_titulo,$id_libro]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarTitulo($titulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_titulo = $titulo->getIdTitulo();
                $nombre_titulo = $titulo->getNombreTitulo();
                $id_libro  = $titulo->getIdLibro();

                $preparedStatement = $connection->prepare("UPDATE titulo SET nombre_titulo = ?, id_libro = ? WHERE id_titulo = ?;");
                $preparedStatement->execute([$nombre_titulo,$id_libro,$id_titulo]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarTitulo(int $id_titulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM titulo WHERE id_titulo = ?;");
                $preparedStatement->execute([$id_titulo]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function listarLibros(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM libro;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

    }

?>