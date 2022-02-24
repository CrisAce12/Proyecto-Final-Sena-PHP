<?php

    class Requisitos{

        private int $idRequisito;
        private string $nombreRequisito, $descripcionRequisito;

        public function __construct($arrayRequisito)
        {
            
            if(count($arrayRequisito)==2){

                $this->nombreRequisito = $arrayRequisito["nombreRequisito"];
                $this->descripcionRequisito = $arrayRequisito["descripcionRequisito"];

            }
            elseif(count($arrayRequisito)==3){

                $this->idRequisito = $arrayRequisito["idRequisito"];
                $this->nombreRequisito = $arrayRequisito["nombreRequisito"];
                $this->descripcionRequisito = $arrayRequisito["descripcionRequisito"];

            }

        }

        public function getIdRequisito()
        {
            return $this->idRequisito;
        }

        public function setIdRequisito($idRequisito)
        {
            $this->idRequisito = $idRequisito;
            return $this;
        }

        public function getNombreRequisito()
        {
            return $this->nombreRequisito;
        }

        public function setNombreRequisito($nombreRequisito)
        {
            $this->nombreRequisito = $nombreRequisito;
            return $this;
        }

        public function getDescripcionRequisito()
        {
            return $this->descripcionRequisito;
        }

        public function setDescripcionRequisito($descripcionRequisito)
        {
            $this->descripcionRequisito = $descripcionRequisito;
            return $this;
        }
    }

?>