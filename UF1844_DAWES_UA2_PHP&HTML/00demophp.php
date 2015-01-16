<?php

/*Los comentarios en PHP puede ser utilizado para varios propósitos,
 uno muy interesante es que se puede generar documentación de la API 
 directamente de ellos mediante el uso de PHPDocumentor ( http://www.phpdoc.org/ ). 
 para ello uno tiene que usar un comentario-JavaDoc como sintaxis 
(se ajusta al  DTD DocBook), ejemplo:
*/
/**
* Con el segundo *  se abre el bloque DocBook, que más adelante podría<br>
* en su ciclo de desarrollo de ahorrar mucho tiempo al evitar tener que reescribir<br>
* trozos importantes de documentación.
*/

?>
<!DOCTYPE html>
<html lang='es'>
  <head>
  <meta charset='utf-8'>
  <title>PHP!</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <div class="container"> 
		<h1>Presentamos PHP</h1>
		<img width='200px' heigth='auto'src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
		<div class="header">
			<h2>
			<?php
			$bienvenido = "¡Empecemos con PHP!";
			echo $bienvenido;
			?>
			</h2>
		</div>
		<p><strong>Podemos generar listas:</strong><mark>¡ 
		  <?php
		  for ($numero = 1; $numero <= 10; $numero++) {
			if ($numero <= 9) {
				echo $numero . ", ";
			} else {
				echo $numero . " !";
			}
		  }; 
		  ?>
		  </mark>
		</p>
	   <p>Podemos también variar la salida de datos <strong>Esta oración desordenada cambiará cada vez que hagas clic en Actualizar<strong></p>
		   <p class='well'>
			   <?php
				   $palabras = array("el ", "rápido ", "marrón ", "zorro ",
				   "saltó ", "sobre ", "el ", "vago ", "perro ");
				   shuffle($palabras);//suffle() Esta función mezcla un array (crea un orden aleatorio de sus elementos).
				   foreach ($palabras as $palabra) {
					   echo $palabra;
				   };
				   
				   unset($palabra);
			   ?>
		   </p>
		<p>Realmente, todo lo que hemos hecho en esta página podríamos hacerlo con javascript, es decir con programación que se ejecuta en el cliente, aunque más adelante veremos que con PHP se pueden hacer otras cosas</p>
		<p><strong>Algunas que podremos hacer con PHP:</strong>
		  <ol>
			<?php
			$cosas = array("Comunicarnos con bases de datos",
			"Enviar cookies", "Evaluar formularios de datos",
			"Construir páginas web dinámicas");
			foreach ($cosas as $cosa) {
				echo "<li>$cosa</li>";
			}
			
			unset($cosas);//unset() destruye las variables especificadas
		  ?>
		  </ol>
		</p>
		
	</div>
  </body>
</html> 