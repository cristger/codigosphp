<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Funciones para strings</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/readable/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container">
<body>.

<h1>Funciones de strings y arrays</h1>
<h2>Limitando los strings...</h2>
<p>Muchas veces debemos manejar strings en una aplicación web. Por ejemplo en un blog, para crear pequeños resúmenes y el típico leer más. En estos casos debemos manipular los strings y son muy útiles las funciones de string y arrays que incorpora php en su núcleo</p>

<p>Como ejemplo, partamos de los siguientes dos strings:</p>
<div class="well">
	<?php
echo $cadena1='
<p>El gran parecido que posee PHP con los lenguajes más comunes de programación estructurada, como C y Perl, 
permiten a la mayoría de los programadores 
crear aplicaciones complejas con una curva de aprendizaje
 muy corta.';
echo $cadena2=' <p>También les permite involucrarse con aplicaciones
 de contenido dinámico sin tener que aprender 
 todo un nuevo grupo de funciones.</p>';
?></div>
<h2>Longitud del string en caracteres y en palabras</h2>
<p>Mediante las siguientes funciones podemos ver el número de caracteres o palabras que tiene el primer string:</p>
<code>strlen($string);</code>
<code>str_word_count($string,0);</code>
<div class="well">
	<?php
echo '<p>El primer párrafo tiene '.strlen($cadena1).' caracteres y ' .str_word_count($cadena1,0).' palabras</p>';	
?></div>
<h2>Crear substrings</h2>
<p>Podemos crear de forma simple limitar el string mediante la función substr():</p>
<code>string substr ( string $string , int $start [, int $length ] );</code>
<p>El primer parámetro es el string, el segundo el carácter donde empieza y el tercero la longitud en caracteres</p>
<p>En el siguiente ejemplo cortamos el primer string en el carácter 1 y lo cerramos en el 200, añadiendo puntos suspensivos</p>
<code>substr ($cadena1 ,0, 200);</code>
<div class="well">
	<?php
	echo substr($cadena1,0,200).'...';	
?>
</div>
<h2>Convertir arrays en string y viceversa</h2>
<p>Pero en el ejemplo anterior sólo podíamos hacerlo con caracteres, y no podemos saber a ciencia cierta si caerán los puntos suspensivos en un lugar no idóneo...
si quisiéramos hacerlo por palabras, por ejemplo, debemos hacer algo... 
Una solución en convertir el string en un array mediante explode():</p>
<p><code>Explode(); implode()</code></p>
<p>Podemos convertir un string en un array mediante explode, delimitar el array mediante
 array_slice ... y volverlo a convertir en string mediante implode</p>
<p>Sintaxis Explode:<code>array explode ( string $delimiter , string $string [, int $limit ] )</code></p>
<p><code>explode (' ',$cadena, 20);</code></p>
<p>Sintaxis array_slice:<code>array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )</code></p>
<p><code>array_slice($cadena1ex,0,18);</code></p>
<p>Sintaxis implode:<code>string implode ( string $glue , array $pieces )</code></p>
<p><code>implode(" ", $cadena1sl);</code></p>
	<div class="well">
		<?php
	//separamos el párrafo en un array
	$cadena1ex=explode(" ",$cadena1);
	//var_dump($cadena1ex);
	$cadena1sl=array_slice($cadena1ex,0,18);
	//var_dump(cadena1sl);
	echo implode(" ", $cadena1sl).'...';	
	?>
	</div>
</div>
</body>
</html>
