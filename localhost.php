<?php
$servername = "localhost";
$database = "colegio";
$username = "root";
$password = "mysql";
/*
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//select database
$db = mysqli_select_db( $conn, $database ) or die ( "Upps! Something went wrong" );
*/

$con = mysqli_connect($servername, $username, $password, $database);
try{
    $conn = new PDO('mysql:host=localhost;dbname=colegio', $username , $password);
    echo 'Conexion realizada';
   }            
catch (PDOException $ex) {
      echo $ex->getMessage();
      exit;
   }

/* @var $_POST type */
$nombre= $_POST["nusuario"];
$pass= $_POST["cusuario "];


$query=("SELECT username,password FROM `usuario` "
        . "WHERE `username`='".mysqli_real_escape_string($con, $nombre)."' and "
        . "`password`='".mysqli_real_escape_string($con, $pass)."'"); 

$rs= mysqli_query($con, $query); 
$row=mysqli_fetch_object($rs); 
$nr = mysqli_num_rows($rs);


if($nr == 1){ 
  
echo 'No ingreso'; 
} 

else if($nr == 0) {    
    
   // header("Location:Modulo_Asignaturas.php"); 
}   



/*
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT persona.nombre, persona.apellido, usuario.username, usuario.password, tipo_usuario.tipo_usuario 
from persona 
inner join usuario on persona.id = usuario.id_persona
inner join tipo_usuario on usuario.tipo_usuario_id = tipo_usuario.id;";

$resultado = mysqli_query( $conn, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla
echo "<table border='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Tipo de usuario</th>";
echo "</tr>";

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado ))
{
    echo "<tr>";
    echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['apellido'] . "</td><td>" . $columna['username'] . "</td><td>" . $columna['password'] . "</td><td>" . $columna['tipo_usuario'] . "</td>";
    echo "</tr>";
}

echo "</table>"; // Fin de la tabla
*/

//mysqli_close($conn);
?>