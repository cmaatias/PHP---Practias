<?php
header("Content-Type: text/html;charset=utf-8");
/*VARIABLES FORMULARIO*/
$bbdd=$_POST['bbdd'];
$user=$_POST['user'];
$passwd=$_POST['passwd'];

/*CONEXION A BBDD*/
$con= new mysqli ("localhost",$user,$passwd,$bbdd);

/*COMPROBACION DE ERRORES*/
if ($con->connect_error) {
	die('No se ha podido establecer la conexion'.$con->connect_error);
}

/*CONSULTAS SQL*/
switch ($_POST['selects'])
{
	case '10';
	$consulta="SELECT APELLIDO, OFICIO, SALARIO, DEPT_NO FROM emple WHERE DEPT_NO=10";
	break;

	case '20';
	$consulta= "SELECT APELLIDO, OFICIO, SALARIO, DEPT_NO FROM emple WHERE DEPT_NO=20";
	break;

	case '30';
	$consulta= "SELECT APELLIDO, OFICIO, SALARIO, DEPT_NO FROM emple WHERE DEPT_NO=30";
	break;

	case '40';
	$consulta= "SELECT APELLIDO, OFICIO, SALARIO, DEPT_NO FROM emple WHERE DEPT_NO=40";
	break;
}

$result = $con-> query ($consulta);
if ($result->num_rows >0){
	echo "<table>";
	echo "DATOS CONSULTADOS";
	echo "<tr><td>APELLIDO</td><td>OFICIO</td><td>SALARIO</td><td>NUMERO DE DEPARTAMENTO</td></tr>";
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["APELLIDO"]."</td><td>".$row["OFICIO"]."</td><td>".$row["SALARIO"]."</td><td>".$row["DEPT_NO"]."</td></tr>";
	}
	echo "</table>";
}
	else {
		echo "WRONG!!";
	}
?>