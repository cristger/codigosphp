<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Agenda Básica con PHP y MySQL </title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/main.css"/>
	
	</head>
	<body>
	<main class='container'>
	<h1>PHP Date</h1>
<p>Sintaxis
<pre>
date(format,timestamp)
</pre></p>
<?php
echo "Hoy es " . date("d/m/Y") . "<br>";
echo "Hoy es  " . date("d.m.Y") . "<br>";
echo "Hoy es  " . date("l-d-m-Y") . "<br>";
echo "Hoy es  " . date("l");
?>
<h2>Ejemplo para copy</h2>
&copy; 2013-<?php echo date("Y")?>
<h2>Traducir mediante un array</h2>
<pre>http://lachabela.wordpress.com/2012/02/24/fechas-en-espanol-con-php-y-setlocale/</pre>
<pre>http://web.tursos.com/traducir-la-funcion-date-de-php-al-espanol/</pre>
<?php

$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;


?>
<h2>La hora</h2>


<?php
date_default_timezone_set("Europe/Madrid");
echo "La hora es " . date(" h:i:sa");
?>
<h2>Fecha y hora</h2>
<?php

date_default_timezone_set("Europe/Madrid");
echo "La hora es " . date("d/m/Y h:i:sa");
?>


 

	</main>
	</body>
</html>