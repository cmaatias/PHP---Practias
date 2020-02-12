<?php
/*CONEXION A BBDD*/
function conectar($bd,$user,$pass){
$con= new mysqli ("localhost",$bd,$user,$pass);

/*COMPROBACION DE ERRORES*/
if ($con->connect_error) {
	die('No se ha podido establecer la conexion'.$con->connect_error);
}
else {
	echo "conectado";
}
}
?>