<?php

     Class Pagina{

            public $nombre = "Codigo facilito";
            public static $url = "www.codigofacilito.com";

            public function bienvenida(){
                echo "Bienvenidos a <b>". $this->nombre ."</b> la pagina es <b>" . Pagina::$url . "</b><br/>";
            }

            public static function bienvenida2 ()
					{
						echo "Bienvenidos ". self::$url;
					}

     }

?>