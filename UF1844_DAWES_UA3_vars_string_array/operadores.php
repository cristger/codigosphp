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

<h2>Operadores aritméticos</h2>
<?php
$x=2;
$y=3;
echo $x*$y.'<br>';	
echo $x%$y.'<br>';		
	?>	
<h2>	Operadores aritméticos combinados</h2>
	<?php
$a = 3;
echo "$a <br>";
$a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
echo "$a <br>";
$b = "Hola ";
echo "$b <br>";
$b .= "amigo,  "; // establece $b en "Hola ahí!", al igual que $b = $b . "ahí!";		
$b .= "espero que estés bien ";
echo "$b <br>";
?>
	<?php
		echo "<h3>Postincremento</h3>";
		$a = 5;
		echo "Debe ser 5: " . $a++ . "<br />\n";
		echo "Debe ser 6: " . $a . "<br />\n";
		
		echo "<h3>Preincremento</h3>";
		$a = 5;
		echo "Debe ser 6: " . ++$a . "<br />\n";
		echo "Debe ser 6: " . $a . "<br />\n";
		
		echo "<h3>Postdecremento</h3>";
		$a = 5;
		echo "Debe ser 5: " . $a-- . "<br />\n";
		echo "Debe ser 4: " . $a . "<br />\n";
		
		echo "<h3>Predecremento</h3>";
		$a = 5;
		echo "Debe ser 4: " . --$a . "<br />\n";
		echo "Debe ser 4: " . $a . "<br />\n";
	?>
</div>
</body>
</html>
