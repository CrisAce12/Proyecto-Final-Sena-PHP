<?php

    class ArticuloFavorito{

        private int $idUsuario, $idArticulo;

        public function __construct($arrayArticuloFavorito)
        {
            
            $this->idUsuario = $arrayArticuloFavorito["idUsuario"];
            $this->idArticulo = $arrayArticuloFavorito["idArticulo"];

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
         * Get the value of idArticulo
         */ 
        public function getIdArticulo()
        {
                return $this->idArticulo;
        }

        /**
         * Set the value of idArticulo
         *
         * @return  self
         */ 
        public function setIdArticulo($idArticulo)
        {
                $this->idArticulo = $idArticulo;

                return $this;
        }

    }

?>