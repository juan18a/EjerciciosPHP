<?php 

require_once('loteria.php');
require_once('facebook.php');
require('cuatriMoto.php');
require('web.php');
require('deportivo.php');
require('persona.php');

//$loteria = new Loteria(4,5);
//$loteria->sortear();

//$facebook = new Facebook("Juan", 26, 1245);
//echo $facebook->pass;
//$facebook->verInformacion();


/* Primer Bloque de Pruebas Class Vehiculo
$vehiculo = new Vehiculo();
$vehiculo->estado(); 
$vehiculo->encender(); 
$vehiculo->estado(); 
*/
 //Segundo Bloque de Pruebas Class Moto
//$moto = new Moto();
//$moto->estado();
//$moto->encender();
//$moto->estado();




//Tercer Bloque de Pruebas Class Cuatrimoto/
//$moto = new CuatriMoto();
//$moto->estado();


// llamado 1
//$pagina = new Pagina();
//$pagina->bienvenida();

 //Llamado 2 (metodo estatico) sin llamar la clase y esta heradado */
//Web::bienvenida2();

/*
$deportivo = new Deportivo();
$deportivo->estado();
$deportivo->LlenarTanque(100);
$deportivo->Encender();
$deportivo->Usar(350);
$deportivo->estado();
*/


$persona = new Persona();
$persona->ingresarNombre("Juan", "Diaz");
$persona->obtenerNombre();



?>