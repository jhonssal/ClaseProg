<?php 
include("header.php");
require("localhost.php");


if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }
  global $con;
    $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($con, $theValue) : mysqli_escape_string($con, $theValue);

    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;    
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
  }
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nusuario'])) {
  $loginUsername=$_POST['nusuario'];
  $password=$_POST['cusuario'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Modulo_Asignaturasest.php";
  $MM_redirectLoginFailed = "";
  $MM_redirecttoReferrer = false;
  //mysqli_select_db($database_localhost, $localhost);
  
  $LoginRS__query=sprintf("SELECT username, password FROM usuario WHERE username=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 

   
  $LoginRS = mysqli_query($con, $LoginRS__query) or die(mysqli_error($con));
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
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
    <form class="registro-formulario" id="form-ingreso" action="<?php echo $loginFormAction; ?>" method="post">
        <input type="text" class="registro-input" placeholder="User" name="nusuario" required>
        <input type="password" class="registro-input" placeholder="Password" name="cusuario" required>
        
        <input type="submit" value="Ingresar" class="registro-btn btn-group">

       
    </form>
    </div>
                           
  </div>
</div>

</body>
</html>