<?php
class Vista_actividades{
	public $Nombre_actividad;
	public $Fecha_limte;
	public $Hora_limite;
	public $Numero_intentos;
	

	public function __construct($Nombre_actividad,$Fecha_limte,$Hora_limite,$Numero_intentos){
		$this->Nombre_actividad = $Nombre_actividad;
		$this->Fecha_limte = $Fecha_limte;
		$this->Hora_limite=$Hora_limite;
		$this->Numero_intentos=$Numero_intentos;
		

	}
}
 
$act1 =new Vista_actividades('actividad 1','10 de junio','10 pm','10 ');
$act2 =new Vista_actividades('actividad 2','10 de agosto','12 pm','10 ');
$act3 =new Vista_actividades('actividad 3','10 de agosto','1 am','10 ');

$datoact = [$act1,$act2,$act3];

function consultar_act($datoact){
	echo '<tr>';
	echo '<td><a href="modulo_haceractividadest.php"><img src="img/Folder.png" class="rounded" >'.$datoact->Nombre_actividad.'</a></td>';
	echo '<td>'.$datoact->Fecha_limte.'</td>';
	echo '<td>'.$datoact->Hora_limite.'</td>';
	echo '<td>'.$datoact->Numero_intentos.'</td>';
	
}


?>


