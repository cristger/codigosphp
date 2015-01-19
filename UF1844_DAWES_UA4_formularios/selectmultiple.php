<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>mi primer php</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>


<body>
  <div class="container">    
<h1>Select Multiple</h1>
<form id='miForm' action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<p>Dinos qué cerveza te gusta:</p>
<div class="">	
	<select multiple name="cerveza[]">    
	<option value="SanMiguel">San Miguel</option>    
	<option value="Mahou">Mahou</option>    
	<option value="Heineken">Heineken</option>    
	<option value="Carlsberg">Carlsberg</option>    
	<option value="Aguila">Aguila</option> 
	</select>
</div>
<div class="">
<input type="submit" value='enviar'>
</div>
</form>
<?php
if (isset($_POST["cerveza"])){
$cervezas=$_POST["cerveza"]; 
var_dump($cervezas);
for ($i=0;$i<count($cervezas);$i++) 
      	{ 
      	echo "<br> Cerveza " . $i . ": " . $cervezas[$i]; 
      	} 
}
?>
</div>

</body>
</html>
