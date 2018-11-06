
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

	<div class="container mt-2 mb-2">
		<div class="page-header">
			<nav class="navbar sticky-top navbar-expand-sm bg-light navbar-dark"> <!--style="background-color: #e3f2fd;  -->
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
  
<div class="container-fluid my-3" style="width: 64rem">
<div class="card">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
		      <div align='center'><h5 style="color:#007bff";> Actividad a realizar</h5>
	      </ul>
	        </div>
 <!-- espacio donde el estudiante sube actividad -->
	
 <div class="card-body">
	<div class="container">
  <p>Titulo de la actividad</p>
  <div class="container card bg-secondary text-white">
    <div  class="card-body">Descripcion de la actividad</div>
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