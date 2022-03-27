<?php

    
    require('articulosFavoritosVO.php');

    class ArticuloFavoritoDao{

        public function ListarFavoritos($idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();
                
                $preparedStatement = $connection->prepare("SELECT * FROM articuloFavoritos WHERE idUsuario = ?;");
                $preparedStatement->execute([$idUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function InsertarFavorito($idUsuario,$idArticulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("INSERT INTO articuloFavoritos (idUsuario,idArticulo) VALUES ( ?,? );");
                $preparedStatement->execute([$idUsuario,$idArticulo]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function BorrarFavorito($idUsuario,$idArticulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM articuloFavoritos WHERE idArticulo = ? AND idUsuario = ?;");
                $preparedStatement->execute([$idArticulo,$idUsuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>