<?php 
require('Vista_Asignaturas.php'); 
include('headeri.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Modulo Asignaturas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>

	<!-- card de subir actividad, actividades evaluativas, registro de notas, registro de asistencia -->
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
<!-- Tabla que muestra las asignaturas -->
<div class="container">
<table class="table table-hover shadow p-4 mb-4 bg-white ">
   <thead class="thead-dark">
  <tr>
    <th>Nombre Asignatura</th>
    <th>Nombre docente</th>
    <th>Email</th>
  </tr>
  </thead>

<?php
for ($i=0; $i < count($datovi); $i++) { 
  consultar_Asignaturas($datovi[$i]);
}
?>

</table>
  <button class="btn btn-outline-primary">
    <a href="index.php">Atrás</a>
  </button>
  

</div>
</div>

</body>
</html>