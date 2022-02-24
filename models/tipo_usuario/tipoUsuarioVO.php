<?php

    class TipoUsuario{

        private int $idTipoUsuario;
        private string $nombreTipoUsuario;

        public function __construct($arrayTipoUsuario)
        {
            
            if(count($arrayTipoUsuario)==1){

                $this->nombreTipoUsuario = $arrayTipoUsuario["nombreTipoUsuario"];  

            }
            elseif(count($arrayTipoUsuario)==2){

                $this->idTipoUsuario = $arrayTipoUsuario["idTipoUsuario"];
                $this->nombreTipoUsuario = $arrayTipoUsuario["nombreTipoUsuario"];

            }
            

        }

        public function getIdTipoUsuario()
        {
            return $this->idTipoUsuario;
        }

        public function setIdTipoUsuario($idTipoUsuario)
        {
            $this->idTipoUsuario = $idTipoUsuario;
            return $this;
        }

        public function getNombreTipoUsuario()
        {
            return $this->nombreTipoUsuario;
        }

        public function setNombreTipoUsuario($nombreTipoUsuario)
        {
            $this->nombreTipoUsuario = $nombreTipoUsuario;
            return $this;
        }
    }

?>