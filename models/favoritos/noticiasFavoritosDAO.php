<?php

    
    require('noticiasFavoritosVO.php');

    class NoticiaFavoritoDao{

        public function ListarFavoritos($idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();
                
                $preparedStatement = $connection->prepare("SELECT * FROM noticiaFavoritos WHERE idUsuario = ?;");
                $preparedStatement->execute([$idUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function InsertarFavorito($noticiaFavorito){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $idUsuario = $noticiaFavorito->getIdUsuario();
                $idNoticia = $noticiaFavorito->getIdNoticia();

                $preparedStatement = $connection->prepare("INSERT INTO noticiaFavoritos (idUsuario,idNoticia) VALUES ( ?,? );");
                $preparedStatement->execute([$idUsuario,$idNoticia]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function BorrarFavorito(int $idNoticia){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM noticiaFavoritos WHERE idNoticia = ?;");
                $preparedStatement->execute([$idNoticia]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>