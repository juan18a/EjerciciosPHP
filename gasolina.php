<?php
  
    require("automovil.php");

    interface Gasolina extends Automovil{
        public function VaciarTanque();
        public function LlenarTanque($cant);

    }


?>