<?php include('headeri.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<title>Asistencia</title>
</head>
<body>


<!-- card de ver actividad, actividades evaluativas, registro de notas, registro de asistencia -->
<div class="container-fluid my-3" style="width: 64rem">
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a class="nav-link" href="modulo_actividadest.php">Actividades</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="modulo_notasest.php">Ver Notas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="#">Ver Asistencia</a>
				</li>
			</ul>
		</div>
							<div class="container-fluid">
								<div class="form-group col-md-3">
									<br>
									<label for="periodo">Periodo a consultar</label>
									<select class="form-control" id="periodo">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
							</div>
							
							<div class="container">
								<table class="table shadow p-4 mb-4 bg-white">
									<thead class="thead-dark">
										<tr>
											<th>Asistencia</th>
											<th>Fecha</th>
											<th>Descripcion(excusas) </th>
											
										</tr>
									</thead>
									<tbody>
										<tr >
											<td>si</td>
											<td>15-04-1997</td>
											<td>Clonficto familiar</td>
											
										</tr>
										<tr class="table-danger">
											<td>No</td>
										  <td>15-04-1997</td>
											<td>Clonficto familiar</td>
										</tr>
										<tr class="table-danger">
											<td>No</td> 
											<td>15-04-1997</td>
											<td>Clonficto familiar</td>
										</tr>
										<br>
									</tbody>
								</table>
								<div class="container">
									<button class="btn btn-outline-primary"><a href="javascript:history.go(-1);">Atras</a>
									</button>
								</div>
						 </div>





</body>
</html>