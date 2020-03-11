<html>
<head>
<title>CONEXION A BBDD</title>
<meta charset="UTF-8"
</head>
<body>
<h1 align="center">CONEXION A BBDD</h1>
<h2>DATOS DE BASE DE DATOS</h2>
<form  method="POST">
<p>Nombre de Base de Datos: <input type="text" name="bbdd"/required></p>
<p>Usuario de Base de Datos: <input type="text" name="user"/required></p>
<p>Contraseña: <input type="text" name="passwd"/></p>
</form>
<form action="formulariooperaciones.php">
<button name="createdb">Crea una Base de Datos</button>
</form>
<form>
<button name="Enviar">Enviar</button>
</form>
</body>
</html>

<?php
session_start();
if (isset($_POST['bbdd'])){
/*CONEXION A BBDD*/
$con= new mysqli ("localhost","root","");

/*COMPROBACION DE ERRORES*/
if ($con->connect_error){
	die('No se ha podido establecer la conexion'.$con->connect_error);
	}
if (isset($_POST['user'])){
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
	echo "Conexion exitosa!";
	}
}
}
?>