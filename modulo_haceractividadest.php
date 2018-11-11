<?php include('headeri.php'); ?>
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
					<a class="nav-link" href="modulo_asistenciaest.php">Ver Asistencia</a>
				</li>
			</ul>
		</div>
	      
		      <div class="shadow-sm p-4 mb-4 bg-white" align='center'><h5 style="color:#007bff";> Actividad a realizar</h5>
	    
	        </div>
 <!-- espacio donde el estudiante sube actividad -->
	
 <div class="card-body">
	<div class="container">
  <form>
<div align='center'>
<p>Click en la imagen para descargar el documento</p>
 <a href="img/actividad.png" download="actividad">
  <img src="img/actividad.png"  >
</a>
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </form>
		</div>
  
	

	<form action="upload.php" method="post" enctype="multipart/form-data">
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
            <br>
	          <div class="container">
                 <button class="btn btn-outline-primary"><a href="javascript:history.go(-1);">Atras</a>
	               </button>
            </div>

  </div>
</div>
</div>


</body>
</html>