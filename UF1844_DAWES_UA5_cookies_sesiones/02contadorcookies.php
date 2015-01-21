<?php
    // Caduca en un año
	$duracion=	time() + 365 * 24 * 60 * 60;
	//operador ternario if else _ variable = (condición) ? valor-cuando-es-verdadera : valor-cuando-es-falsa;
	$contador=isset($_COOKIE['contador']) ?$_COOKIE['contador']:'Bienvenido a mi página';
    setcookie('contador', $contador+1, $duracion); 
     
?> 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
<meta  charset="UTF-8"/> 
<title>Prueba de cookie</title> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
</head> 
<body> 
<p> 
<?php 
if (isset($_COOKIE['contador'])) {
echo 'Esta es tu visita nº'.$contador;
}else{
echo $contador;
}

?> 
</p>
<p>
<?php 

?>

</p> 

</body> 
</html>