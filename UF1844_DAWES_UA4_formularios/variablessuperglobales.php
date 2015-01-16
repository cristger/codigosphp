<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Variables superglobales</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">

<h1>  variables superglobales   </h1> 
<?php

echo '$_GET';
echo var_dump($_GET);
echo '$_POST';
echo var_dump($_POST);
echo '$_REQUEST';
echo var_dump($_REQUEST);
echo '$_COOKIES';
echo var_dump($_COOKIES);
echo '$_SESSION';
echo var_dump($_SESSION);
echo '$_FILES';
echo var_dump($_FILES);
echo '$_SERVER';
echo var_dump($_SERVER);
echo '$_SERVER["PHP_SELF"]';
echo var_dump($_SERVER["PHP_SELF"]);
$comida='arroz';
echo '$GLOBALS';
echo var_dump($GLOBALS);

?>
</div>
</body>
</html>
