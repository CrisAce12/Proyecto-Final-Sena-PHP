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

        public function InsertarFavorito($articuloFavorito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $idUsuario = $articuloFavorito->getIdUsuario();
                $idArticulo = $articuloFavorito->getIdArticulo();

                $preparedStatement = $connection->prepare("INSERT INTO articuloFavoritos (idUsuario,idArticulo) VALUES ( ?,? );");
                $preparedStatement->execute([$idUsuario,$idArticulo]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function BorrarFavorito(int $idArticulo){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM articuloFavoritos WHERE idArticulo = ?;");
                $preparedStatement->execute([$idArticulo]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>