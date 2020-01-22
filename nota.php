<?php
$nota=$_POST["n1"];
$alumno=$_POST["nombre"];
if ($nota>=0 && $nota<2){
	echo $alumno.' tu nota es un '.$nota.' es muy DEFICIENTE';
}
elseif ($nota>=2 && $nota<5){
	echo $alumno.' tu nota es un '.$nota.' es un SUSPENSO';
}
elseif ($nota>=5 && $nota<7){
	echo $alumno.' tu nota es un '.$nota.' es un APROBADO';
}
elseif ($nota>=7 && $nota<9){
	echo $alumno.' tu nota es un '.$nota.' es un NOTABLE';
}
elseif ($nota>=9 && $nota>=10){
	echo $alumno.' tu nota es un '.$nota.' es un SOBRESALIENTE';
}
?>