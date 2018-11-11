<?php
class Vista_Asignaturas{
	public $Asignatura;
	public $Nombre_docente;
	public $email;
	

	public function __construct($Asignatura,$Nombre_docente,$email){
		$this->Asignatura = $Asignatura;
		$this->Nombre_docente = $Nombre_docente;
		$this->email=$email;
		

	}
}
 
$usuario1 =new Vista_Asignaturas('Matematicas','salcedo','@gmail12345');
$usuario2 =new Vista_Asignaturas('Ingles','mancipe','@gmail12345');
$usuario3 =new Vista_Asignaturas('Fisica','pablito','@gmail12345');

$datovi = [$usuario1,$usuario2,$usuario3];

function consultar_Asignaturas($datovi){
	echo '<tr>';
	echo '<td><a href="modulo_actividadest.php"><img src="img/Folder.png" class="rounded" >'.$datovi->Asignatura.'</a></td>';
	echo '<td>'.$datovi->Nombre_docente.'</td>';
	echo '<td>'.$datovi->email.'</a></td>';
	
}


?>


