<?php
//**VARIABLES**//
$horas=$_POST['horas'];
$nombre=$_POST['nombre'];
//**OPERACIONES**//
if ($horas==40){
	echo "Tu salario es de ".($horas*12)."€";
}

if ($horas>40){
	$total=((40*12)+($horas-40)*16);
	echo "Tu salario es de ".($total)."€";
}
/*mayor >*/
?>