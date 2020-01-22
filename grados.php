<?php

/*Actividad 1 - Grados*/
$celsius=$_POST['gradosC'];
$kelvin=$celsius+273;
$fahrenheit=($celsius*1.8)+32;

/*CONVERSION - 1*/
echo $celsius.' Celcius son '.($kelvin).' Grados Kelvin'.' y ';
echo $fahrenheit.' Grados Fahrenheit';
?>