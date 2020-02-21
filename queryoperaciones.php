<?php
header("Content-Type: text/html;charset=utf-8");
/*VARIABLES*/
$createbbdd=$_POST['createbbdd'];
$userdb=$_POST['userdb'];
session_start();
if (isset($_POST['createddbb'])){
/*CONEXION A BBDD*/
$con= new mysqli ("localhost","root","");

/*COMPROBACION DE ERRORES*/
if ($con->connect_error) {
	die('No se ha podido establecer la conexion'.$con->connect_error);
}
/*CREACION DE BBDD*/
$createdb='CREATE DATABASE'.$_POST['createbbdd'];
$result = $con -> query($createdb);
if ($result==TRUE){
	echo "La base de datos se ha creado con exito!";
	}
else {
	echo "La base de datos no se ha creado, Prueba con otro nombre.";
	}

/*CREACION DE USUARIO*/
$createuser='CREATE user'.$_POST['userdb'];
$result = $con -> query($createuser);
if ($result==TRUE){
	echo "El usuario se ha creado con exito!";
	}
else {
	echo "El usuario no se ha creado, Prueba con otro nombre";
	}
}
?>