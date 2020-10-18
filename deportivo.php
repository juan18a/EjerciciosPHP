<?php 
    require_once('gasolina.php');

    Class Deportivo implements Gasolina{

        private $estado = false;
        private $tanque = 0;


        public function estado(){
                if($this->estado){
                    echo "El auto esta encendido y tienen " . $this->tanque . " de litros de gasolina en el tanque <br/>";
                }else {
                    echo "El auto esta apagado <br/>";
                }
          
        } 


        public function Encender()
        {
            if($this->estado){
                echo "El auto esta encendido <br/>";
            }else {
                if($this->tanque <= 0){
                    echo "Usted no puede encender el auto porque no tiene gasolina XD";
                }else{
                    echo "El auto esta encendiendo <br/>"; 
                    $this->estado = true;
                }      
            }
        }

        public function Apagar()
        {
             if($this->estado){
                echo "El auto esta apagandose <br/>";
                $this->estado = false;
            }else {
                echo "El auto esta apagado <br/>"; 
               
            }
        }


        public function VaciarTanque()
        {
            $this->tanque = 0;
        }

        public function LlenarTanque($cant)
        {
            $this->tanque = $cant;
        }

        public function Usar($km)
        {
            if($this->estado){
                $reducir = $km /3;
                $this->tanque = $this->tanque - $reducir;
                if($this->tanque <= 0){
                    $this->estado = false;
                }

            }else{
                echo "El auto esta apagado y no se puede usar<br/>"; 
            }
        }
    }


?>