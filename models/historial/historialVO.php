<?php

    class Historial{

        private int $idUsuario;
        private string $url;

        public function __construct($arrayArticuloHistorial)
        {
            
            $this->idUsuario = $arrayArticuloHistorial["idUsuario"];
            $this->url = $arrayArticuloHistorial["url"];

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
         * Get the value of url
         */ 
        public function getUrl()
        {
                return $this->url;
        }

        /**
         * Set the value of url
         *
         * @return  self
         */ 
        public function setUrl($url)
        {
                $this->url = $url;

                return $this;
        }
        
    }

?>