<?php 
require('datos.php'); 
require('usuarios.php');
include("header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>


<table class='table table-hover'>
  
  <tr>
    <td><b>correo electronico</b></td>
    <td><b>Nombre de usuario</b></td>
    <td><b>contraseña</b></td>
    <td><b>Nombre y apellidos</b></td>
  </tr>
  
<?php
for ($i=0; $i < count($datosu); $i++) { 
  consultar_usuarios($datosu[$i]);
}
?>

</table>



<!--   -slider -->
<div class="container-fluid">
	<div> 
		<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/img2.png"  style="width:100%;">
      </div>

      <div class="item">
        <img src="img/img1.png"  style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/img.jpg"  style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- formulario de ingreso  -->

	<img src="img/user.png" class="icono-form">
<h1 class="registro-titulo">Bienvenido</h1>
<form class="registro-formulario" id="form-ingreso">
	<div class="registro-opt">
		<select class="registro-opt-input" form="form-ingreso">
    		<option class="registro-opt-label" value="">Seleccionar...</option>
    		<option value="1">Administrador</option>
    		<option value="2">Docente</option>
    		<option value="3">Estudiante</option>
    		<option value="4">Acudiente</option>
    		<option value="5">Superadmin</option>
    	</select>
  	</div>
  	<input type="text" class="registro-input" placeholder="User">
  	<input type="password" class="registro-input" placeholder="Password">
  	<input type="submit" value="Ingresar" class="registro-btn">
    <input type="button" onclick=" location.href='#'"  value="Solicitar cuenta" name= "boton" class="registro-btn">
</form>
	</div>
</div>

<ul>
	
<?php
for ($i=0; $i < count($datos); $i++) { 
	PrintDatos($datos[$i]);
}
?>

</ul>

</body>
</html>