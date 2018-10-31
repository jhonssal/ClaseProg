
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Actividades</title>
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
   
    <!-- Profile -->  

  <div class="container" >

    <div  align="right">
    <div>
      <img class="card-img-top" class="profile" src="img/icon.png" alt="Card image" style="width:70px" >
      <div align="right">
      <h4 class="card-title" >John Doe</h4> 
      <p class="card-text"></p>
     
      </div>    
    </div>   
    </div>
  </div>
    
    <div class="container">
<table class="table table-hover table-bordered">
   <h2>(NOMBRE DE LA MATERIA)</h2>
  <h5>Seguimiento de actividades</h5>
  
<thead class="thead-dark">
  <tr>
    <th>Nombre Asignatura</th>
    <th>Nombre docente</th>
    <th>Email</th>
  </tr>
  </thead>
</table>

<i class="fa fa-book" style="font-size:48px;color:red"></i>




<button class="btn btn-outline-primary">
    <a href="javascript:history.go(-1);">Atras</a>
</button>
 </div>
 </div>
</body>
</html>