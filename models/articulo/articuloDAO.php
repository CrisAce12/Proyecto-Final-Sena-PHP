<?php

    require('../controllers/db.php');
    require('articuloVO.php');

    class ArticuloDao{

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

        public function mostrarArticulo(int $id_articulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT id_articulo, nombre_articulo, texto_articulo, estado, id_titulo, id_libro FROM articulo WHERE id_articulo = ?;");
                $preparedStatement->execute([$id_articulo]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarArticulo($articulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_articulo = $articulo->getNombreArticulo();
                $texto_articulo = $articulo->getTextoArticulo();
                $estado = $articulo->getEstado();
                $id_titulo = $articulo->getIdTitulo();
                $id_libro = $articulo->getIdLibro();

                $preparedStatement = $connection->prepare("INSERT INTO articulo (nombre_articulo,texto_articulo,estado,id_titulo,id_libro) VALUES ( ?,?,?,?,? );");
                $preparedStatement->execute([$nombre_articulo,$texto_articulo,$estado,$id_titulo,$id_libro]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarArticulo($articulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_articulo = $articulo->getIdArticulo();
                $nombre_articulo = $articulo->getNombreArticulo();
                $texto_articulo = $articulo->getTextoArticulo();
                $estado = $articulo->getEstado();
                $id_titulo = $articulo->getIdTitulo();
                $id_libro = $articulo->getIdLibro();

                $preparedStatement = $connection->prepare("UPDATE articulo SET nombre_articulo = ?, texto_articulo = ?, estado = ?, id_titulo = ? , id_libro = ? WHERE id_articulo = ?;");
                $preparedStatement->execute([$nombre_articulo,$texto_articulo,$estado,$id_titulo,$id_libro,$id_articulo]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarArticulo(int $id_articulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM articulo WHERE id_articulo = ?;");
                $preparedStatement->execute([$id_articulo]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

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