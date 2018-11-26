<?php
$con=mysqli_connect("localhost","root","mysql","colegio");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$consulta=mysqli_query($con,"SELECT * FROM usuario");

//if ($consulta) {

    /* obtener el array de objetos */
    $fila = mysqli_fetch_row($consulta);
        //echo  $fila[0].$fila[1];
    
//}
echo $consulta[0];

mysqli_close($con);
?>