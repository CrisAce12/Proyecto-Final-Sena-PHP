<?php

    class Usuario{

        private int $idUsuario, $idTipoUsuario;
        private string $nombre, $email, $contraseña, $historial;

        public function __construct($arrayUsuario)
        {
            
            if(count($arrayUsuario)==4){

                $this->nombre = $arrayUsuario["nombreUsuario"];
                $this->email = $arrayUsuario["emailUsuario"];
                $this->contraseña = $arrayUsuario["contraseñaUsuario"];
                $this->idTipoUsuario = $arrayUsuario["idTipoUsuario"];

            }
            elseif(count($arrayUsuario)==5){

                $this->idUsuario = $arrayUsuario["idUsuario"];
                $this->nombre = $arrayUsuario["nombreUsuario"];
                $this->email = $arrayUsuario["emailUsuario"];
                $this->contraseña = $arrayUsuario["contraseñaUsuario"];
                $this->idTipoUsuario = $arrayUsuario["idTipoUsuario"];

            }

            

        }
        
        public function getIdUsuario()
        {
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuario)
        {
            
            $this->idUsuario = $idUsuario;
            return $this;

        }

        public function getIdTipoUsuario()
        {
            return $this->idTipoUsuario;
        }
 
        public function setIdTipoUsuario($idTipoUsuario)
        {
            
            $this->idTipoUsuario = $idTipoUsuario;
            return $this;

        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {

            $this->nombre = $nombre;
            return $this;

        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {

            $this->email = $email;
            return $this;

        }

        public function getContraseña()
        {
            return $this->contraseña;
        }

        public function setContraseña($contraseña)
        {
            
            $this->contraseña = $contraseña;
            return $this;
            
        }

        public function getHistorial()
        {
                return $this->historial;
        }

        public function setHistorial($historial)
        {
                $this->historial = $historial;

                return $this;
        }
        
    }

?>