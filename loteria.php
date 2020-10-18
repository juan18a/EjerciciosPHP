<?php

Class Loteria{

    public $numero1;
    public $numero2;
    public $i;

    public function __construct($numero1, $numero2){     
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function sortear(){
        for($this->i=0; $this->i<10; $this->i++){
            echo $this->numero1 = rand(2,1) . '<br>';
        }
    }



}


?>