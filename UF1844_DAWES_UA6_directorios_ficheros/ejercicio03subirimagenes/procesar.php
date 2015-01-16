<html>
<head>
<title>Subir imágenes al servidor</title>
<meta charset='utf-8'>
</head>
<body>
	<?php
	copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
	echo "La foto se ha registrado en el servidor.<br>";
	$nom=$_FILES['foto']['name'];
	echo "<img src=\"$nom\">";
	?>
</body>
</html>
