<?php

    class Tramite{

        private int $idTramite, $idRequisito, $idArticulo;
        private string $nombreTramite, $textoTramite;

        public function __construct($arrayTramite)
        {
            
            if(count($arrayTramite)==4){

                $this->nombreTramite = $arrayTramite["nombreTramite"];
                $this->textoTramite = $arrayTramite["textoTramite"];
                $this->idRequisito = $arrayTramite["idRequisito"];
                $this->idArticulo = $arrayTramite["idArticulo"];

            }
            elseif(count($arrayTramite)==5){

                $this->idTramite = $arrayTramite["idTramite"];
                $this->nombreTramite = $arrayTramite["nombreTramite"];
                $this->textoTramite = $arrayTramite["textoTramite"];
                $this->idRequisito = $arrayTramite["idRequisito"];
                $this->idArticulo = $arrayTramite["idArticulo"];

            }

            

        }

        public function getIdTramite()
        {
                return $this->idTramite;
        }

        public function setIdTramite($idTramite)
        {

            $this->idTramite = $idTramite;
            return $this;

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

        public function getIdArticulo()
        {
            return $this->idArticulo;
        }

        public function setIdArticulo($idArticulo)
        {

            $this->idArticulo = $idArticulo;
            return $this;

        }

        public function getNombreTramite()
        {
            return $this->nombreTramite;
        }

        public function setNombreTramite($nombreTramite)
        {

            $this->nombreTramite = $nombreTramite;
            return $this;

        }

        public function getTextoTramite()
        {
            return $this->textoTramite;
        }

        public function setTextoTramite($textoTramite)
        {

            $this->textoTramite = $textoTramite;
            return $this;

        }
    }

?>