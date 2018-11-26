<?php
$usuario=$_POSR['usuario'];
$clave=$_POST['clave'];
//conecta a la base de datos
$conexion=mysqli_connect("localhost", "root", "mysql", "colegio");
$consulta="SELECT * FROM usuario WHERE usuario='$username' AND clave='$password'";
$resultado=mysqli_query($conexion, $consulta) ;
//or die (mysqli_error());

echo $resultado[];

$filas= mysqli_num_rows($resultado);
if ($filas>0)
{
 header("location:Modulo_Asignaturasest.php");
}else
{
    echo"error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>