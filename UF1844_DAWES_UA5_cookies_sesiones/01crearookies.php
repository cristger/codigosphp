<?php

//También la podemos establecer de otra manera estableciendo su expiración mediante la función time 
// la función time toma la fecha actual a la que le añadimos 1 mes
$expira=time()+60*60*24*30;
setcookie("simpatizante", "Berni", $expira);
?>
<!DOCTYPE html> 
<html lang="es"> 
<head> 
<meta  charset="UTF-8"/> 
<title>Prueba de cookie</title> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
</head> 
<body> 

<div class="container">
<h1>¿Qué son las cookies?</h1>
<p>Una cookie se utiliza a menudo para identificar a un usuario.</p>
<p> Una cookie es un pequeño archivo que el servidor se incrusta en el ordenador del usuario. </p>
<p> Cada vez que el mismo equipo solicita una página con un navegador, se enviará la cookie también. </p>
 <p> Con PHP, usted puede crear y recuperar los valores de cookie</p>
<h2> Sintaxis</h2>

<div class="well"><p>setcookie(name, value, expire, path, domain);</p></div>
<p>
<h2>Recuperando cookies</h2>

<div class="well">
<?php
// Imprimimos las dos cookies
 if(isset($_COOKIE["usuario"])){
		echo $_COOKIE["usuario"]. "<br><hr>";}
	else{
		
		echo 'Bienvenido amigo';
		}
echo $_COOKIE["simpatizante"]. "<br><hr>";

// También podemos ver todas las cookes activas mediante var_dump o print_r y el array que arroja $_COOKIE
print_r($_COOKIE);
// por ultimo podemos borrar una cookie si esta se encuentra en el pasado
//setcookie("usuario", "", time()-3600);
?>

?>
</div>
</p>
 </div>

</body> 
</html>