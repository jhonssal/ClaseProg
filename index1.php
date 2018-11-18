<?php 
include("header.php");
require_once("localhost.php");
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
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container-fluid">
	<div class="row">
    <!-- carrusel  -->
    <div class="col-7">
          
      <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/car-1.jpg" width="1100" height="500" class="ml-5 mt-5">
          </div>
          <div class="carousel-item">
            <img src="img/car-2.jpg" width="1100" height="500" class="ml-5 mt-5">
          </div>
          <div class="carousel-item">
            <img src="img/car-3.jpg" width="1100" height="500" class="ml-5 mt-5">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
          
    <!-- formulario de ingreso  -->
    <div class="col-5">
    <img src="img/icon.png" class="icono-form">
    <h1 class="registro-titulo">Bienvenido</h1>
    <form class="registro-formulario" id="form-ingreso" action="" method="post">
        <input type="text" class="registro-input" placeholder="User" name="nusuario">
        <input type="password" class="registro-input" placeholder="Password" name="cusuario">
        
        <input type="submit" value="Ingresar" class="registro-btn btn-group">

       
    </form>
    </div>
                           
  </div>
</div>

</body>
</html>