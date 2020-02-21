<?php
/*CONEXION PERSONALIZADA*/
/*VARIABLES*/
$user=$_POST['user'];
$passwd=$_POST['passwd'];
$bbdd=$_POST['bbdd'];
/*CONEXION A BBDD*/
$con= new mysqli ("localhost",$user,$passwd,$bbdd);

/*COMPROBACION DE ERRORES*/
if ($con->connect_error) {
	die('No se ha podido establecer la conexion'.$con->connect_error);
}
else {
	echo "Conexion con exitosa!";
	}
?>