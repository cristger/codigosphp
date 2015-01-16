<!DOCTYPE html>
<html lang='es'>

<head>
	<meta charset="UTF-8" />
	
	<title>Cuestionarios Autocorregidos</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<div class='container'>

		<h1>Cuestionario Autocorregible</h1>
		
		<form action="evaluacion.php" method="post">
		
            <ol>
            
                <li>
                
                    <h3>¿Cuál es el código jQuery correcto para establecer el color de fondo de todos los elementos p en rojo?</h3>
                    
                    <div>
                        <input type="radio" name="pregunta-1"  value="A" required>
                        <label for="pregunta-1-A">A) <code>$("p").manipulate("background-color","red")</code> </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-1"  value="B" >
                        <label for="pregunta-1-B">B) <code>$("p").css("background-color","red")</code></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-1" value="C" >
                        <label for="pregunta-1-C">C) <code>$("p").layout("background-color","red")</code></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-1"  value="D" >
                        <label for="pregunta-1-D">D) <code>$("p").style("background-color","red")</code></label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Los scripts de php están delimitados por las etiquetas:</h3>
                    
                    <div>
                        <input type="radio" name="pregunta-2" value="A" required>
                        <label for="pregunta-2-A">A) <code>&lt;&>...&lt;/&></code></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-2"  value="B">
                        <label for="pregunta-2-B">B) <code>&lt;?php>...&lt;/?></code></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-2" value="C">
                        <label for="pregunta-2-C">C) <code>&lt;script>...&lt;/script></code></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-2"  value="D">
                        <label for="pregunta-2-D">D) <code>&lt;?php...?></code></label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>¿Cual es la sintaxis correcta en javascript para cambiar el siguiente texto  html 'Seré un texto cambiado'?</h3>
					<p><code>&lt;div id="demo">Seré un texto cambiado&lt;/div></code></p>
                    
                    <div>
                        <input type="radio" name="pregunta-3"  value="A" required>
                        <label for="pregunta-3-A">A)#demo.innerHTML = "Es genial Javascript";</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-3"  value="B" />
                        <label for="pregunta-3-B">B) document.getElementById("demo").innerHTML = "He sido cambiado con Javascript";</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-3"  value="C" />
                        <label for="pregunta-3-C">C) document.getElement("div").innerHTML = "Soy un div mutante";</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-3"  value="D" />
                        <label for="pregunta-3-D">D) document.getElementByName("div").innerHTML = "Me llamo div";</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Un error 404 ...</h3>
                    
                    <div>
                        <input type="radio" name="pregunta-4" value="A" required>
                        <label for="pregunta-4-A">A) indica que el host ha sido capaz de comunicarse con el servidor, pero no existe el fichero que ha sido pedido</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-4"  value="B" />
                        <label for="pregunta-4-B">B) la comunicación con la página web no funciona momentáneamente</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-4"  value="C" />
                        <label for="pregunta-4-C">C) indica que debe ser supervisado el servidor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-4"  value="D" />
                        <label for="pregunta-4-D">D) Indica que el archivo al que queremos acceder está protegido</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>La librería Bootstrap es:</h3>
					<p class='help-block'>Indica la opción más correcta</p>
                    
                    <div>
                        <input type="radio" name="pregunta-5"  value="A" required>
                        <label for="pregunta-5-A">A) Un framework de desarrollo web frontend</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-5"  value="B" />
                        <label for="pregunta-5-B">B) Una librería de  PHP</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-5"  value="C" />
                        <label for="pregunta-5-C">C) Una librería de CSS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="pregunta-5"  value="D" />
                        <label for="pregunta-5-D">D) Una librería de Javascript</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input class='btn btn-primary' type="submit" value="Comprobar respuestas">
		
		</form>
	
	</div>
	
	
</body>

</html>