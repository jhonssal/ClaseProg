<?php 
require('Vista_actividades.php'); 
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
	<div class="container mt-2 mb-2">
		<div class="page-header">
			<nav class="navbar sticky-top navbar-expand-sm bg-light navbar-dark">
				<div class="container-fluid">
						<a class="navbar-brand" href="">
              <img src="img/user.png" style="width: 100px;">
            </a>
					    <ul class="navbar-nav">
						    <li class="nav-item"><a class="nav-link text-primary" href="#">Home</a></li>
						    <li class="nav-item"><a class="nav-link text-primary" href="#">Usuarios</a></li>
						    <li class="nav-item"><a class="nav-link text-primary" href="#">Reportes</a></li>
					    </ul>
          		<form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
              </form>
				</div>
			</nav>
		</div>
	</div>


<!-- card de ver actividad, actividades evaluativas, registro de notas, registro de asistencia -->
<div class="container-fluid my-3" style="width: 64rem">
<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
	<li class="nav-item">
        <a class="nav-link active" href="#">Actividades Creadas</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="crear_actividad.php">Subir Actividad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="actividades_evaluativas.html">Actividades evaluativas</a>
      </li>
 	  <li class="nav-item">
        <a class="nav-link" href="registro_notas.html">Registro de notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro_asistencia.html">Registro de asistencia</a>
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