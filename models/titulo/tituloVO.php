<?php

    class Titulo{

        private int $idTitulo, $idLibro;
        private string $nombreTitulo;

        public function __construct($arrayTitulo)
        {
            
            if(count($arrayTitulo)==2){

                $this->nombreTitulo = $arrayTitulo["nombreTitulo"];
                $this->idLibro = $arrayTitulo["idLibro"];

            }
            elseif(count($arrayTitulo)==3){

                $this->idTitulo = $arrayTitulo["idTitulo"];
                $this->nombreTitulo = $arrayTitulo["nombreTitulo"];
                $this->idLibro = $arrayTitulo["idLibro"];

            }
            

        }

        public function getIdTitulo()
        {
            return $this->idTitulo;
        }

        public function setIdTitulo($idTitulo)
        {

            $this->idTitulo = $idTitulo;
            return $this;

        }

        public function getIdLibro()
        {
            return $this->idLibro;
        }

        public function setIdLibro($idLibro)
        {

            $this->idLibro = $idLibro;
            return $this;
            
        }

        public function getNombreTitulo()
        {
            return $this->nombreTitulo;
        }

        public function setNombreTitulo($nombreTitulo)
        {

            $this->nombreTitulo = $nombreTitulo;
            return $this;

        }
    }

?>