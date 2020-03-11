<html>
<head>
<title>CONSULTA DE DATOS</title>
<meta charset="UTF-8"
</head>
<body>
<h1 align="center">CREACION DE BASE DE DATOS</h1>
<h2>DATOS DE BASE DE DATOS A CREAR</h2>
<form name="crearbd" method="post">
<h2>Nombre BD</h2>
<p>Nombre de Base de Datos: <input type="text" name="createbbdd"/required></p>
<p><input type="submit" value="Enviar"></p>
<p><input type="submit" value="Reset"></p>
</form>
<form action="conectardb.php">
	<button name="conectardb">Conectate a una Base de Datos</button>
</form>
</body>
</html>

<?php
session_start();
if (isset($_POST['createbbdd'])){
/*CONEXION A BBDD*/
$con= new mysqli ("localhost","root","");

/*COMPROBACION DE ERRORES*/
if ($con->connect_error){
	die('No se ha podido establecer la conexion'.$con->connect_error);
	}
/*CREACION DE BBDD*/
$createdb='CREATE DATABASE '.$_POST['createbbdd'];
$result = $con -> query($createdb);
if ($result==TRUE){
	echo "La base de datos se ha creado con exito!";
	}
else {
	echo "La base de datos no se ha creado, Prueba con otro nombre.";
	}
}
?>