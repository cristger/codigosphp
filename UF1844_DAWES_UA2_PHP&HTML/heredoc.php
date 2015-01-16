<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>mi primer php</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>.

<h2>Heredoc</h2>
<?php
$nombre='Jose Antonio';
$edad=48;
$poblacion='La Puebla de Montalbán';
$aficion='ver series de tv';
$biografia=<<<BIOGRAFIA
	<div class="algo">Biografia</div>
	<p>
	hola, me llamo <strong>$nombre</strong>, soy de $poblacion, 
	tengo  $edad y 
	me gusta $aficion
	</p>
	me gusta caminar
	y jugar al ajedrez
BIOGRAFIA;
echo $biografia;
?>
	<h2>Nowdoc</h2>
	<?php
		$nombre='Jose Antonio';
		$edad=48;
		$poblacion='La Puebla de Montalbán';
		$aficion='ver series de tv';
		$biografia=<<<'BIO2'
		<div class="algo">Biografia</div>
		<p>
		hola, me llamo <strong>$nombre</strong>, soy de $poblacion, 
		tengo  $edad y 
		me gusta $aficion
		</p>
		me gusta caminar
		y jugar al ajedrez
BIO2;
		echo $biografia;
		?>
</div>
</body>
</html>
