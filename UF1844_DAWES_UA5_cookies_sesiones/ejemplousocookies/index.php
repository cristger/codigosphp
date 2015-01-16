<?php //duración de una hora 
$nombre= isset($_GET['nombre'])? $_GET['nombre']:'invitado';////operador ternario if else _ variable = (condición) ? valor-cuando-es-verdadera : valor-cuando-es-falsa;
   setcookie("usuario", $nombre, time()+3600);     
?> 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
<meta  charset="UTF-8"/> 
<title>Prueba de cookie</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head> 
<body> 

<div class="container">
<h1>Ejemplo de uso de cookies</h1>
<p>En este ejemplo vamos a ver como establecer una cookie y cómo se recupera el valor establecido. Para ello pediremos al usuario que introduzca su nombre, que guardaremos en una cookie.

Primero pedimos al usuario que introduzca el valor de su nombre, usamos un formulario que procesará la página</p>
<h2> Ingreso</h2>
<form action="index.php" method="GET"> 
<INPUT TYPE="text" NAME="nombre"><BR> 
<INPUT TYPE="submit" VALUE="Enviar"> 
</form> 
Se ha establecido una cookie de nombre <b>usuario</b> con el valor: 
<strong><?php isset($_GET['nombre'])? $_GET['nombre']:'invitado'; ?> que será válida durante 1 hora. </strong>
</div>
</p>
 </div>

</body> 
</html>