<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<title>Subir Actividad</title>
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


<!-- card de subir actividad, actividades evaluativas, registro de notas, registro de asistencia -->
<div class="container-fluid my-3" style="width: 64rem">
<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="modulo_actividad.php">Actividades Creadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Subir Actividad</a>
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
   
<!-- formulario de subir actividad -->    
  	<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombreAct">Nombre de la actividad:</label>
      <input type="text" class="form-control" id="nombreAct" placeholder="Nombre">
    </div>
    <div class="form-group col-md-3">
      <label for="gradoList">Grado</label>
     	<select class="custom-select" class="form-control" id="gradoList">
      		<option value="null">Seleccione...</option>
	  		<option value="1">Sexto</option>
  			<option value="2">Séptimo</option>
  			<option value="3">Octavo</option>
  			<option value="4">Noveno</option>
  			<option value="5">Décimo</option>
  			<option value="6">Once</option>
		</select>
    </div>
    <div class="form-group col-md-3">
    	<label for="grupoList">Grupo</label>
     	<select class="custom-select" class="form-control" id="grupoList">
      		<option value="null">Seleccione...</option>
	  		<option value="1">A</option>
  			<option value="2">B</option>
  			<option value="3">C</option>
		</select>
    </div>
  </div>

  <div class="form-row text-right">
  <div class="form-group col-2 my-auto">
    <label for="fechaAct">Fecha de entrega:</label>
  </div>
  <div class="form-group col-2 my-auto">
  		<input type="date" class="form-control mx-auto" id="fechaAct" style="width: 11rem; text-align: center;">
  	</div>
  <div class="form-group col-2 my-auto">
    <label for="horaAct">Hora:</label>
  </div>
  <div class="form-group col-2 my-auto">
  		<input type="time" class="form-control mx-auto" id="horaAct" style="width: 8rem; text-align: center;">
  	</div>
  <div class="form-group col-3 my-auto"> 
  	<label for="intentosAct">Numero de intentos:</label>
  </div>
  <div class="form-group col-1 my-auto">
  		<input type="number" id="intentosAct" min="1" max="5">
  	</div>
  </div>

  <div class="form-row mt-2">
  	<div class="form-group col-2 my-auto text-center">
  		<label>Seleccionar archivo:</label>
  	</div>
    <div class="form-group col-10 my-3">
    	<label class="custom-file-label" for="userfile" >Elegir archivo</label>
    	<input type="file" class="custom-file-input" id="uploadFile" name="userfile">
    </div>
  </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  
</form>


  </div>
</div>
</div>



</body>
</html>