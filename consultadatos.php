<html>
<head><title>CONSULTA DE DATOS</title></head>
<body>
<h1>CONSULTA DE DATOS</h1>
<h2>TABLAS</h2>
<form>
<button name="tablaclientes">Tabla Clientes</button>
</form> <form>
<button name="tablasocios">Tabla Socios VIP</button>
</form>
<form action="conectardb.php">
<button name="voler">Volver a la Pagina Principal</button>
</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['bbdd'])){
/*CONEXION A BBDD*/
$con= new mysqli ("localhost","root","", "gymnasio2020");

/*COMPROBACION DE ERRORES*/
if ($con->connect_error){
	die('No se ha podido establecer la conexion'.$con->connect_error);
	}
/*INSERCION DE DATOS*/
if (isset($_POST['tablaclientes'])){
	$consulta1 = "SELECT * FROM clientes";
	$result = $con -> query($consulta1);
}
}
?>