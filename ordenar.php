<?php
/*VARIABLES*/
$v1=20;
$v2=30;
$v3=7;
$v4=1;
$aux;
echo "ENUNCIADO - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
echo "</br>";
/*COMPARACIONES*/
//		VUELTA 1		//
if ($v4<$v3){
	$aux=$v4;
	$v4=$v3;
	$v3=$aux;
echo "VARIABLES - Vuelta 1 - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
}
if ($v3<$v2){
	$aux=$v3;
	$v3=$v2;
	$v2=$aux;
echo "VARIABLES - Vuelta 1 - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
}
if ($v2<$v1) {
	$aux=$v2;
	$v2=$v1;
	$v1=$aux;
echo "VARIABLES - Vuelta 1 - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
}
echo "</br>";
//		VUELTA 2		//
if ($v4<$v3){
	$aux=$v4;
	$v4=$v3;
	$v3=$aux;
echo "VARIABLES - Vuelta 2 - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
}
if ($v3<$v2){
	$aux=$v3;
	$v3=$v2;
	$v2=$aux;
echo "VARIABLES - Vuelta 2 - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
}
echo "</br>";
//		VUELTA 3		//
if ($v4<$v3){
	$aux=$v4;
	$v4=$v3;
	$v3=$aux;
echo "VARIABLES - Vuelta 3 - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
}
echo "Numeros Ordenados - ".$v1." - ".$v2." - ".$v3." - ".$v4.'<br/>';
?>