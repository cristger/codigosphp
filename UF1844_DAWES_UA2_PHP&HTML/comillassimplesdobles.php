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

<h2>Comillas dobles</h2>
<?php
$nombre='Jose Antonio';
$edad=48;
$poblacion='La Puebla de Montalbán';
$aficion='ver series de tv';
echo "<div class=\"algo\">Biografia</div>
	<p>hola, me llamo <strong>$nombre</strong>, soy de $poblacion, tengo  $edad y me gusta $aficion</p>";
?>
	<h2>Comillas simples</h2>
	<?php
echo '<div class=\"algo\">Biografia</div><p>hola, me llamo <strong>$nombre</strong>, soy de $poblacion, tengo  $edad años y me gusta $aficion</p>';	
		?>
<h2>Concatenando strings con '.'</h2>
	<?php
echo '<div class=\"algo\">Biografia</div><p>hola, me llamo <strong>'.$nombre."</strong>, soy de $poblacion, tengo ".$edad.' años y me gusta '. $aficion.'</p>';	
	?>
</div>
</body>
</html>
