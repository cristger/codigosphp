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

<h2>Funciones de strings</h2>
<?php
echo strlen("¡Estamos estupendamente en esta casa!").'<br>';
echo str_word_count("¡Estamos estupendamente en esta casa!").'<br>';
echo strrev("Estamos estupendamente en esta casa").'<br>';
echo strpos("¡Estamos estupendamente en esta casa!",'casa').'<br>';
echo str_replace('casa','mansion',"¡Estamos estupendamente en esta casa!").'<br>';		
	?>	
</div>
</body>
</html>
