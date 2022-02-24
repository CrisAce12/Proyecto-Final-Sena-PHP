<?php

    class Articulo{

        private int $idArticulo, $idTitulo, $idLibro;
        private string $nombreArticulo, $textoArticulo;
        private bool $estado;

        public function __construct($arrayArticulo)
        {
            
            if(count($arrayArticulo)==5){

                $this->nombreArticulo = $arrayArticulo["nombreArticulo"];
                $this->textoArticulo = $arrayArticulo["textoArticulo"];
                $this->estado = $arrayArticulo["estado"];
                $this->idTitulo = $arrayArticulo["idTitulo"];
                $this->idLibro = $arrayArticulo["idLibro"];

            }
            elseif(count($arrayArticulo)==6){

                $this->idArticulo = $arrayArticulo["idArticulo"];
                $this->nombreArticulo = $arrayArticulo["nombreArticulo"];
                $this->textoArticulo = $arrayArticulo["textoArticulo"];
                $this->estado = $arrayArticulo["estado"];
                $this->idTitulo = $arrayArticulo["idTitulo"];
                $this->idLibro = $arrayArticulo["idLibro"];

            }            

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

        public function getNombreArticulo()
        {
            return $this->nombreArticulo;
        }

        public function setNombreArticulo($nombreArticulo)
        {
            $this->nombreArticulo = $nombreArticulo;
            return $this;
        }

        public function getTextoArticulo()
        {
            return $this->textoArticulo;
        }

        public function setTextoArticulo($textoArticulo)
        {
            $this->textoArticulo = $textoArticulo;
            return $this;
        }

        public function getEstado()
        {
            return $this->estado;
        }

        public function setEstado($estado)
        {
            $this->estado = $estado;
            return $this;
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
    }

?>