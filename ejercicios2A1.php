<?php
//***VARIABLES**//
$num1=$_POST['num1'];
$num2=$_POST['num2'];
//**OPERACIONES**//
switch ($_POST['operaciones']){
	case 'suma1';
	echo 'La suma entre '.$num1.' y ' .$num2.'='.($num1+$num2);
	break;

	case 'resta2';
	echo 'La resta entre '.$num1.' y ' .$num2.'='.($num1-$num2);
	break;

	case 'multiplicacion3';
	echo 'La multiplicacion entre '.$num1.' y ' .$num2.'='.($num1*$num2);
	break;

	case 'division4';
	echo 'La division ente '.$num1.' y ' .$num2.'='.($num1/$num2);
	break;
}
?>