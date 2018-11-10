<?php 
require('Vista_actividades.php'); 
include('headeri.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<title>Vista actividad</title>
</head>
<body>


<!-- card de ver actividad, actividades evaluativas, registro de notas, registro de asistencia -->
<div class="container-fluid my-3" style="width: 64rem">
<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="#">Actividades</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="modulo_notasest.html">Ver Notas</a>
			</li>
			<li class="nav-item">
        <a class="nav-link" href="modulo_asistenciaest.html">Ver Asistencia</a>
			</li>
    </ul>
  </div>
  <div class="card-body">
   
<!-- tabla para ver actividades-->    
<div class="container">
	<table class="table table-hover shadow p-4 mb-4 bg-white">
		 <thead class="thead-dark">
		<tr>
			<th>Nombre Actividad</th>
			<th>Fecha limite</th>
			<th>Hora limite</th>
			<th>N° Intentos</th>
		</tr>
		</thead>
	
	<?php
	for ($i=0; $i < count($datoact); $i++) { 
		consultar_act($datoact[$i]);
	}
	?>
	
	</table>
		<button class="btn btn-outline-primary"><a href="javascript:history.go(-1);">Atras</a>
		</button>
</div>
</div>



</body>
</html>