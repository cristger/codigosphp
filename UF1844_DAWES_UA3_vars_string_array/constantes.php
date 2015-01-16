<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Tipos de datos</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>.

<h2>Constantes</h2>
<?php
// podemos ver cómo saludos se comporta como variable global dentro de la función 
// también podemos saludos anque no esta con la primera en mayúscula funciona pues tiene el tercer parámetro en True
		define("Saludos", "Bienvenidos a Toledo", true);
		
		function misSaludos() {
			return saludos;
		}
		echo misSaludos();
	
	?>	
</div>
</body>
</html>
