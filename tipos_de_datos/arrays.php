<?php

// Como definir un arreglo
$datos = array(100,200,300);
$nombres = [100, 200, 300];
//var_dump($datos, $nombres).'<br />';

// Primero se declara varibale y luego se agregan valores
$info = array();
$info = [];
$info[0] = 1000;
$info[1] = 'Soy programador';
$info[3] = 0.01;
//print_r($info);

// $datos2
$datos2 = array();
$datos2[0] = 100;
$datos2[3] = 400;
//var_dump($datos2);

// Ejemplo de arreglo tipo matriz $datos3
$datos3 = array(array(100));
//var_dump($datos3);

$datos3 = array();
$datos3[0][0] = 100;
$datos3[0][1] = 500;
$datos3[0][2] = 900;

// Indice 1 (horizontal)
$datos3[1][0] = 200;
$datos3[1][1] = 600;
$datos3[1][2] = 1000;

echo '<pre>'.var_export($datos3, true).'</pre>';