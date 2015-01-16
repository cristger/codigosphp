<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Recibir datos por form</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>.

<h2>Recepción de datos por formulario</h2>
<?php
$nombre=$_GET['email'];
$password=$_GET['password'];
echo $nombre;
echo '<br>';
echo $password;





?>
</div>
</body>
</html>
