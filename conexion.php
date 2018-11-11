<?php

 $usuario = "root";
 $password = "mysql";
 $servidor = "localhost";
 $basededatos = "colegio";
 
 // creación de la conexión a la base de datos con mysql_connect()
 $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");



?>