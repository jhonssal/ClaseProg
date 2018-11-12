<?php
session_start();
 require("conexion.php");
$username=$_POST['user'];
$pass=$_POST['pass'];

$sql2=mysql_query("SELECT*FROM usuario WHERE username=$username");
if($f2=mysql_fecth_array($sql2)){
    if($pass==f2['tipo_usuario_id']){
        $_SESSION['id']=$f2['id']
        $_SESSION['tipo de usuario']=3;
    }
    
}

?>
