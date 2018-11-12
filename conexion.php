<?php

 $usuario = "root";
 $pass = "mysql";
 $servidor = "localhost";
 $basededatos = "colegio";
 
 // creación de la conexión a la base de datos con mysql_connect()
 $conexion = @mysqli_connect( $servidor, $usuario, $pass,$basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");
 if ($basededatos==true) 
 { 
    echo "conectado"; 
 } 
 else 
 { 
   echo "desconectado"; 
 }  


?>