<?php

require('molde.php');

  Class Persona extends Molde{

        private $mensaje = "Hola que ase";

        public function mostrar(){
            echo $this->mensaje;
        }

         public function ingresarNombre($nombre, $username){
            $this->nombre = $nombre ."-". $username;
         }
         public function obtenerNombre(){
            echo $this->nombre;
         }

  } 



?>