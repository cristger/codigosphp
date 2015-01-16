<?php
//Veo si recibo datos del formulario
if(isset($_POST["estilo"])){
   //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
   $estilo = $_POST["estilo"];
   //meto el estilo en una cookie
   setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}else{
   //si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
   if (isset($_COOKIE["estilo"])){
      //es que tengo la cookie
      $estilo = $_COOKIE["estilo"];
   }
}
?>

<!DOCTYPE html> 
<html lang="es"> 
<head> 
<meta  charset="UTF-8"/> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
//miro si he tengo un estilo definido, porque entonces tengo que cargar la correspondiente hoja de estilos
if (isset($estilo)){
   echo '<link rel="STYLESHEET" type="text/css" href="css/' . $estilo . '.css">';
}
?>
</head>

<body>
 <div class="container">

      <div class="masthead nav masthead-nav">
<form class='form-horizontal' action="index.php" method="post">
Selecciona un estilo:
<br>
<select name="estilo">
<option value="">
<option value="justified-nav">Navegación justificada
<option value="jumbotron-narrow">Jumbotron Narrow
<option value="cover">Cover
</select>
<input type="submit" value="Actualizar el estilo">
</form>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Estilos usando cookies</h1>
        <p class="lead">Mediante cookies podemos alterar nuestra página en base a estilos elegidos por nuestros usuarios</p>

      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Cookies</h2>
          <p>PHP soporta cookies HTTP de forma transparente. Las Cookies son un mecanismo por el cuál se almacenan datos en el browser remoto y así rastrear o identificar a usuarios que vuelven. Se pueden configurar Cookies usando la función setcookie() </p>
        </div>
        <div class="col-lg-4">
          <h2>setcookies()</h2>
          <p>setcookie() define una cookie para ser enviada junto con el resto de las cabeceras de HTTP. Al igual que otras cabeceras, las cookies deben ser enviadas antes de que el script genere ninguna salida (es una restricción del protocolo). Ésto implica que las llamadas a esta función se coloquen antes de que se genere cualquier salida, incluyendo las etiquetas <html> y <head> al igual que cualquier espacio en blanco. </p>
          
       </div>
        <div class="col-lg-4">
          <h2>Parámetros de setcookies</h2>
          <p><pre>setcookie(name, value, expire, path, domain);</pre>.</p>
          <h2>Recoger cookies</h2>
		  <p>Las cookies pueden ser recogidas mediante  $_COOKIE['']</p>
			<pre>echo "Bienvenido " . $_COOKIE["user"] . "!<br>";</pre>		  
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>© Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>