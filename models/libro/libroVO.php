<?php

    class Libro{

        private int $idLibro;
        private string $nombreLibro;

        public function __construct($arrayLibro)
        {
            
            if(count($arrayLibro)==1){

                $this->nombreLibro = $arrayLibro["nombreLibro"];

            }
            elseif(count($arrayLibro)==2){

                $this->idLibro = $arrayLibro["idLibro"];
                $this->nombreLibro = $arrayLibro["nombreLibro"];

            }

            

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

        public function getNombreLibro()
        {
            
            return $this->nombreLibro;

        }

        public function setNombreLibro($nombreLibro)
        {

            $this->nombreLibro = $nombreLibro;
            return $this;

        }

    }

?>