<?php
class usuarios{
	public $correo;
	public $username;
	public $password;
	public $nombre_completo;

	public function __construct($correo,$username,$password,$nombre_completo){
		$this->correo = $correo;
		$this->username = $username;
		$this->password =$password;
		$this->nombre_completo=$nombre_completo;

	}
}
 
$usuario1 =new usuarios('jhonsalcedo@unisangil.edu.co','salcedo','12345','jhon salcedo');
$usuario2 =new usuarios('camilomancipe@unisangil.edu.co','mancipe','12345','camilo mancipe');
$usuario3 =new usuarios('pabloemiliodesalcedo@unisangil.edu.co','pablito','12345','pedro pablo');

$datosu = [$usuario1,$usuario2,$usuario3];

function consultar_usuarios($datosu){
	echo '<tr>';
	echo '<td>'.$datosu->correo.'</td>';
	echo '<td>'.$datosu->username.'</td>';
	echo '<td>'.$datosu->password.'</td>';
	echo '<td>'.$datosu->nombre_completo.'</td>';
	echo '</td>';
}


?>