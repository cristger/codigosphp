<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2>Recepción de datos por url</h2>
<?php

$bio1 =<<<BIO1
	<h3>me llamo jose</h3>
	<ul>
	<li>vivo en Torrejón</li>
	<li>soy músico</li>
	<li>tengo 32 años</li>
	</ul>
BIO1;
$bio2 =<<<BIO2
	<h3>me llamo Luis</h3>
	<ul>
	<li>vivo en Londres</li>
	<li>soy pintor</li>
	<li>tengo 36 años</li>
	</ul>
BIO2;
	
$nombre='';
if(empty($_GET['nombre'])){
	echo'';
}else{
	$nombre=$_GET['nombre'];		
	if($nombre=='jose')echo $bio1;
	if($nombre=='luis')echo $bio2;
}
var_dump($nombre);	




?>
</div>
</body>
</html>
