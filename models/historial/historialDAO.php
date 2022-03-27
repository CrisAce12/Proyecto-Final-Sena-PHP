<?php

    require('historialVO.php');

    class HistorialDao{

        public function ListarHistorial($idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();
                
                $preparedStatement = $connection->prepare("SELECT * FROM historial WHERE idUsuario = ?;");
                $preparedStatement->execute([$idUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function InsertarHistorial($idUsuario,$url){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("INSERT INTO historial (idUsuario,url) VALUES ( ?,? );");
                $preparedStatement->execute([$idUsuario,$url]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>