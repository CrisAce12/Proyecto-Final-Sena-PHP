<?php

    require('../controllers/db.php');
    require('libroVO.php');

    class LibroDao{

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

        public function mostrarLibro(int $id_libro){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_libro, nombre_libro FROM libro WHERE id_libro = ?;");
                $preparedStatement->execute([$id_libro]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarLibro($libro){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_libro = $libro->getNombreLibro();

                $preparedStatement = $connection->prepare("INSERT INTO libro (nombre_libro) VALUES ( ? );");
                $preparedStatement->execute([$libro]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarLibro($libro){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_libro = $libro->getIdLibro();
                $nombre_libro = $libro->getNombreLibro();

                $preparedStatement = $connection->prepare("UPDATE libro SET nombre_libro = ? WHERE id_libro = ?;");
                $preparedStatement->execute([$nombre_libro,$id_libro]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarlibro(int $id_libro){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM libro WHERE id_libro = ?;");
                $preparedStatement->execute([$id_libro]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>