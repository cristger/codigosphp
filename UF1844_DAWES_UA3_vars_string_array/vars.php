<!DOCTYPE html>

<html lang="es">
<meta charset='utf-8'>
<head>
<title>Variables y comillas</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/readable/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container"><h2>Imprimiendo variables</h2>
<?php
// primero con echo
echo $booleano = TRUE .'<br>';   // un valor booleano 1
echo $booleano2 = FALSE .'<br>';   // un valor booleano 0
echo $cadena  = "comida".'<br>';  // una cadena con comillas simples
echo $cadena2 = '<strong>comida para perros</strong>'.'<br>';  // una cadena de varias palabras con comillas simples
echo $numero  = 12 .'<br>';     // un entero
echo $numerodecimal  = 12.200 .'<br>';     // un número decimal decimal
// Ahora con print
print($booleano);
print($booleano2);
print($cadena);
print($cadena2);
print($numero);
print($numerodecimal);
//operaciones
echo $numero * $numerodecimal.'<br>';
print($numero * $numerodecimal);
?>
<hr>
<h2>El uso de comillas dobles y simples en variables</h2>
<?php
/// Veamos el tema de las comillas

$pueblo='Puebla de Montalbán';
$pueblo_ciudad='$pueblo en Toledo ';
$poblacion_ciudad="$pueblo en Toledo ";

echo $pueblo.'<br>';
echo $pueblo_ciudad.'<br>';
echo $poblacion_ciudad.'<br>';
print( $pueblo.'<br>');
print($pueblo_ciudad.'<br>');
print( $poblacion_ciudad.'<br>');
?>
<hr>
<h2>El uso de Constantes -  define</h2>
<?php
/// uso de define

define('saludo','hola mundo');
define('adios','<strong>Me voy,  mundo</strong>');

echo saludo;
echo adios;
echo "yo te digo:  ". adios;


?></div>
</body>
</html> 