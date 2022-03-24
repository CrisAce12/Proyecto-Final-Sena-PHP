<?php

    require('tramitesFavoritosVO.php');

    class TramiteFavoritoDao{

        public function ListarFavoritos($idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();
                
                $preparedStatement = $connection->prepare("SELECT * FROM tramitesFavoritos WHERE idUsuario = ?;");
                $preparedStatement->execute([$idUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function InsertarFavorito($tramiteFavorito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $idUsuario = $tramiteFavorito->getIdUsuario();
                $idTramite = $tramiteFavorito->getIdTramite();

                $preparedStatement = $connection->prepare("INSERT INTO tramitesFavoritos (idUsuario,idTramite) VALUES ( ?,? );");
                $preparedStatement->execute([$idUsuario,$idTramite]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function BorrarFavorito(int $idTramite){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM tramitesFavoritos WHERE idTramite = ?;");
                $preparedStatement->execute([$idTramite]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>