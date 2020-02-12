<?php
header("Content-Type: text/html;charset=utf-8");
include("conectar.php");

/*VARIABLES FORMULARIO*/
$bbdd=$_POST['bbdd'];
$user=$_POST['user'];
$passwd=$_POST['passwd'];

$con=conectar ($bbdd,$user,$passwd)
echo "</br> La conexion se ha realizado exitosamente";
?>