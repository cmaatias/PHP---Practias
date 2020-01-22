<?php
/*Actividad 2 - Division*/
$valor1=$_POST['v1'];
$valor2=$_POST['v2'];
/*CONVERSION - 2*/
if ($valor1 % $valor2==0) {
  echo 'La division de '.$valor1.' entre '.$valor2.' Es exacta';
}
else {
	echo 'La division de '.$valor1.' entre '.$valor2.' No es exacta, da como resultado '.intdiv ($valor1,$valor2).' con un resto de ' .($valor1%$valor2);
}
?>