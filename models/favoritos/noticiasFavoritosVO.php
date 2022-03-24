<?php

    class NoticiaFavorito{

        private int $idUsuario, $idNoticia;

        public function __construct($arrayNoticiaFavorito)
        {
            
            $this->idUsuario=$arrayNoticiaFavorito["idUsuario"];
            $this->idNoticia=$arrayNoticiaFavorito["idNoticia"];

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
         * Get the value of idNoticia
         */ 
        public function getIdNoticia()
        {
                return $this->idNoticia;
        }

        /**
         * Set the value of idNoticia
         *
         * @return  self
         */ 
        public function setIdNoticia($idNoticia)
        {
                $this->idNoticia = $idNoticia;

                return $this;
        }

    }

?>