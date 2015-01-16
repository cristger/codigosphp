<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Calcular la edad con php</h2>
<h3>Trabajando con date y explode</h3>

<form method='post'action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="fecha">Introduce tu fecha de nacimiento</label>
    <input name='fecha'type="date" class="form-control" id="fecha" placeholder="Introduzca email">
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
<?php 
if(isset($_POST['fecha'])){
	echo '<div class="well">';
	//el codigo
	$_POST['fecha'];
	//la función explode divide un string en varios string
	// el primer parámetro es el delimitador
	$fechanac=explode('-',$_POST['fecha']);
	$edad=date('Y')-$fechanac[0];
	echo 'Tienes '.$edad. ' años';
	echo '</div>';
}	
?>	

</div>
</body>
</html>
