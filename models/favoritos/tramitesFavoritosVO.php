<?php

    class TramiteFavorito{

        private int $idUsuario, $idTramite;

        public function __construct($arrayTramiteFavorito)
        {

            $this->idUsuario = $arrayTramiteFavorito["idUsuario"];
            $this->idTramite = $arrayTramiteFavorito["idTramite"];

        }


        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of idTramite
         */ 
        public function getIdTramite()
        {
                return $this->idTramite;
        }

        /**
         * Set the value of idTramite
         *
         * @return  self
         */ 
        public function setIdTramite($idTramite)
        {
                $this->idTramite = $idTramite;

                return $this;
        }
        
    }

?>