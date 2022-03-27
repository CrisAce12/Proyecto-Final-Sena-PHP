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

        public function InsertarFavorito($idUsuario, $idNoticia){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("INSERT INTO noticiaFavoritos (idUsuario,idNoticia) VALUES ( ?,? );");
                $preparedStatement->execute([$idUsuario,$idNoticia]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function BorrarFavorito($idNoticia,$idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM noticiaFavoritos WHERE idNoticia = ? AND idUsuario = ?;");
                $preparedStatement->execute([$idNoticia,$idUsuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>