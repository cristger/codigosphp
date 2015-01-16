<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Mayusculas y minusculas</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>.

<h2>Mayusculas y Minúsculas</h2>
<?php
function sobreMi(){
$nombre='Marcos';
$edad=30;
$poblacion='La Puebla de Montalbán';
$aficion='ver series de tv';

	return 'Me llamo '.$nombre.' y tengo '.$edad.' años';
}
echo sobreMi();
echo sobremi();
echo SOBREMI();
?>
</div>
</body>
</html>
