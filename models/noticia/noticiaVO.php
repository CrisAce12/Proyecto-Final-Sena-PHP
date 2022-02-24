<?php

    class Noticia{

        private int $idNoticia, $idArticulo, $idTramite;
        private string $nombreNoticia, $textoNoticia, $fecha;
        private bool $estado;

        public function __construct($arrayNoticia)
        {
            
            if(count($arrayNoticia)==6){

                $this->nombreNoticia = $arrayNoticia["nombreNoticia"];
                $this->textoNoticia = $arrayNoticia["textoNoticia"];
                $this->fecha = $arrayNoticia["fecha"];
                $this->estado = $arrayNoticia["estado"];
                $this->idArticulo = $arrayNoticia["idArticulo"];
                $this->idTramite = $arrayNoticia["idTramite"];

            }
            elseif(count($arrayNoticia)==7){

                $this->idNoticia = $arrayNoticia["idNoticia"];
                $this->nombreNoticia = $arrayNoticia["nombreNoticia"];
                $this->textoNoticia = $arrayNoticia["textoNoticia"];
                $this->fecha = $arrayNoticia["fecha"];
                $this->estado = $arrayNoticia["estado"];
                $this->idArticulo = $arrayNoticia["idArticulo"];
                $this->idTramite = $arrayNoticia["idTramite"];

            }

        }

        public function getIdNoticia()
        {
            return $this->idNoticia;
        }

        public function setIdNoticia($idNoticia)
        {
            $this->idNoticia = $idNoticia;
            return $this;
        }

        public function getNombreNoticia()
        {
            return $this->nombreNoticia;
        }

        public function setNombreNoticia($nombreNoticia)
        {
            $this->nombreNoticia = $nombreNoticia;
            return $this;
        }

        public function getTextoNoticia()
        {
            return $this->textoNoticia;
        }

        public function setTextoNoticia($textoNoticia)
        {
            $this->textoNoticia = $textoNoticia;
            return $this;
        }
 
        public function getFecha()
        {
            return $this->fecha;
        }

        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
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

        public function getIdArticulo()
        {
            return $this->idArticulo;
        }

        public function setIdArticulo($idArticulo)
        {
            $this->idArticulo = $idArticulo;
            return $this;
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
        
    }

?>