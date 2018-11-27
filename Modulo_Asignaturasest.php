<?php 
require('Vista_Asignaturas.php'); 
include('headeri.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Vista Asignaturas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>

  
	<!-- card asignaturas -->
  <div class="container-fluid my-3" style="width: 64rem">
<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#">Asignaturas</a>
			</li>
     
    </ul>
  </div>
  <div class="card-body">

  <div class="container">
  <?php
  
require('localhost.php'); 
  // establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * from asignatura ";

$resultado = mysqli_query($con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla
echo "<table class=  shadow p-4 mb-4 bg-white  >";
echo "<thead class=thead-dark>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Docente</th>";
echo "<th>Correo</th>";

echo "</tr>";
echo  "</thead>";

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado ))
{
    echo "<tr>";
    echo "<td><a href=modulo_actividadest.php><img src=img/Folder.png class=rounded >" . $columna['nombre'] . "</a></td>";
    echo "</tr>";
}

echo "</table>"; // Fin de la tabla

?>
<div> <button class="btn btn-outline-primary"><a href="javascript:history.go(-1);">Atras</a>
  </button> </div>
</div>
</div>



</body>
</html>