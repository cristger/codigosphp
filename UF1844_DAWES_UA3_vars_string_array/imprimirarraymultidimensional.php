<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Array Multididimensional </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/readable/bootstrap.min.css" rel="stylesheet">
		</head>
	<body>
	<div class='container'>
	<h1>Arrays multidimensionales</h1>
	<p>Si un array indizado podemos imprimirlo con <strong>for</strong> y
un array asociativo podemos imprimirlo con <strong>foreach</strong>, 
	los multidimensionales se pueden  imprimir con bucles <mark>for y foreach sucesivos</mark>
	</p>
	<p>Partimos del siguiente array:</p>
<pre>		
	$clase = array
	(
	array('nombre'=>"Jose",'pueblo'=>'La Puebla'),
	array('nombre'=>"Gema",'pueblo'=>'Toledo'),
	array('nombre'=>"David",'pueblo'=>'Cobisa'),
	array('nombre'=>"Teresa",'pueblo'=>'Sonseca')
	);
	echo $clase[1]['nombre'];//Devuelve Gema
</pre>
<p>Nos podemos ayudar de var_dump para ver la configuración del array:</p>
<?php
	$clase = array
	(
	array('nombre'=>"Jose",'pueblo'=>'La Puebla'),
	array('nombre'=>"Gema",'pueblo'=>'Toledo'),
	array('nombre'=>"David",'pueblo'=>'Cobisa'),
	array('nombre'=>"Teresa",'pueblo'=>'Sonseca')
	);
	echo '<p>Nos podemos ayudar de var_dump para analizar el array</p>';
	var_dump($clase);
	?>
	
	<p>Imprimir uno, es sencillo, pues mediante el 
	nombre_del_array+corchetes accedemos a su posición <code>$clase[1]['nombre'];//Devuelve Gema</code></p>
	
		<?php
	echo '<div class="well">'.$clase[1]['nombre'].'</div>';//Devuelve Gema
	?>
	<p>Imprimimos todo mediante for y foreach sucesivos 
	<code>
		<pre>
for($x=0;$x&lt;count($clase);$x++){
	foreach($clase[$x]as $clave =&gt; $valor){
	echo  $clave.': '.$valor;
	}
}	
		</pre>
		</code>
		</p>';
	<?php
	for($x=0;$x<count($clase);$x++){
		echo '<ol>';
		foreach($clase[$x]as $clave => $valor){
			echo  '<li>'.$clave.': '.$valor.'</li>';
		}
		echo '</ol><hr>';
	}
?>
	</div>
	</body>
</html>