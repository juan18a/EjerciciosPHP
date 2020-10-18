<?php

    Class Vehiculo{

        //Atributos
        public $motor = false;
        public $marca;
        public $color;


        //Contructor
       public function estado() {
			if($this->motor == true)
				echo "El motor esta encendido<br>";
			else
				echo "El motor esta apagado<br>";
		}

		public function encender(){
			if ($this->motor == true){
				echo "Cuidado, el motor ya esta encendido<br>";
			}else{
				echo "El motor ahora esta encendido<br>";
				$this->motor = true;
			}
		}



    }


?>