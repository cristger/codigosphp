<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Etiquetas PHP</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>.

<h2>Imprimiendo con tres estilos de etiquetas</h2>
<?php echo 'imprimo con una etiqueta normal<br>'//estilo recomendado;?>
<? echo 'imprimo con una etiqueta abreviada<br>';//sólo funciona con directiva short open tag activada en php.ini ?>
<?='imprimo con el alias de echo<br>';//este alias funciona bien desde PHP 5.3 sin activar ninguna directiva ?>
<% echo 'imprimo con etiquetas de asp<br>';//estilo asp %>
<script language="php">echo 'hola desde script'; </script>//método obsoleto aunque válido

			
	
	
</div>
</body>
</html>
