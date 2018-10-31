<?php

class Datos{
	public $titulo;
	public $descripcion;
	public $ciudad;
	public $anio;

	public function __construct($titulo, $descripcion, $ciudad){
		$this->titulo=$titulo;
		$this->descripcion=$descripcion;
		$this->ciudad=$ciudad;
	}
}

$dato1= new Datos('Ingeniero de Sistemas','Desarrollador de Software', 'Yopal');
$dato2= new Datos('Ingeniero de Sistemas','Analista de Software', 'Medellin');
$dato3= new Datos('Ingeniero de Sistemas','Diseñador de Interfaz de Usuario', 'Bogotá');

$datos= [$dato1,$dato2,$dato3];

function PrintDatos($datos){
	echo '<h2>'.$datos->titulo.'</h2>';
	echo '<p>'.$datos->descripcion.'</p>';
	echo '<p>'.$datos->ciudad.'</p>';
}



?>