<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset="UTF-8" />
	<title> Quiz</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class='container'>
		<h1>Cuestionario Web</h1>
        <?php
            //almacenamos las respuestas en variables
            $respuesta1 = $_POST['pregunta-1'];
            $respuesta2 = $_POST['pregunta-2'];
            $respuesta3 = $_POST['pregunta-3'];
            $respuesta4 = $_POST['pregunta-4'];
            $respuesta5 = $_POST['pregunta-5'];
			// inicializamos el contador de respuestas acertadas
            $totalCorrectas = 0;
            //evaluamos las respuestas
            if ($respuesta1 == "B") { $totalCorrectas++; }
            if ($respuesta2 == "D") { $totalCorrectas++; }
            if ($respuesta3 == "B") { $totalCorrectas++; }
            if ($respuesta4 == "A") { $totalCorrectas++; }
            if ($respuesta5 == "A") { $totalCorrectas++; }
            //Mostramos el resultado en html
			if($totalCorrectas!==5){
				echo "<div class='well'>Has contestado bien $totalCorrectas respuestas de 5 posibles. Vuelve a intentarlo</div>";  
				echo"<button id='volver'class='btn btn-success'onclick='history.back()'>Volver</button>";
			}else{
           echo "Eres un crack";
		   echo <<<DIABLO
		   <style>
			
			.smiley{
				position: relative;
			}
			.face{
				width: 300px;
				height: 300px;
				background: linear-gradient(to bottom, #F90000, #A30F0F);
				border-radius: 50%;
				position: relative;
			box-shadow: 0px 0px 5px #FF0000;
			margin-top:0px;
			}
			.face:after{
				content: " ";
				display: block;
				position: absolute;
				z-index: -1;
				width: 45%;
				box-shadow: 94px 11px 39px 8px black;
				bottom: 0;
			}
			.face-overlay{
				background: black;
				opacity: 0.15;
				border-radius: 50%;
				width: 96%;
				height: 91%;
				position: absolute;
			}
			.lips{
			position: absolute;
			width: 124px;
			height: 35px;
			background: black;
			top: 218px;
			left: 100px;
			transform: rotate(-12deg);
			border-radius: 0px 0px 20px 20px;
			box-shadow: 0px 0px 5px black;
			}
			.eyes .left-big{
			position: absolute;
			width: 55px;
			height: 55px;
			background: black;
			border-radius: 50%;
			left: 32%;
			top: 23%;
			box-shadow: 0px 0px 5px black;
			}

			.eyes .right-big{
			position: absolute;
			width: 55px;
			height: 55px;
			background: black;
			border-radius: 50%;
			right: 32%;
			top: 23%;
			box-shadow: 0px 0px 5px black;
			}

			.eyes .left{
			position: absolute;
			width: 20px;
			height: 20px;
			background: #F00;
			border-radius: 50%;
			left: 34%;
			top: 28%;
			margin-top: -10px;
			box-shadow: 0px 0px 5px black inset;
			transform-origin: 107% 116%;
			transform: rotate(0deg);
			}

			.eyes .right{
			position: absolute;
			width: 20px;
			height: 20px;
			background: #F00;
			border-radius: 50%;
			right: 41%;
			top: 24%;
			box-shadow: 0px 0px 5px black inset;
			transform-origin: 95% 120%;
			transform: rotate(0deg);
			}

			.abru .right{
			position: absolute;
			width: 86px;
			height: 51px;
			background: none;
			box-shadow: -6px 11px 0px black;
			border-radius: 69%;
			transform: rotate(-40deg) rotateY(180deg);
			right: 25%;
			}
			.test{
				position: absolute;
				width: 100px;
				height: 100px;
				background: black;
			}
			/* animations */
			.face{
				-webkit-animation: face .8s infinite; 
				-moz-animation: face .8s infinite; 
				animation: face .8s infinite; 
			}
			.face:after{
				-webkit-animation: face_after 0.8s infinite; 
				animation: face_after 0.8s infinite; 
				-moz-animation: face_after 0.8s infinite; 
			}
			.lips{
				-webkit-animation: lips .4s infinite; 
				-moz-animation: lips .4s infinite; 
				animation: lips .4s infinite; 
			}
			.eyes .right, .eyes .left{
				-webkit-animation: pelk 1s infinite; 
				-moz-animation: pelk 1s infinite; 
				animation: pelk 1s infinite; 
			}
			.eyes .left{
			  -webkit-animation: left_eye .4s infinite; 
			  -webkit-animation-timing-function: linear;
			  animation: left_eye .4s infinite; 
			  animation-timing-function: linear;
			  -moz-animation: left_eye .4s infinite; 
			  -moz-animation-timing-function: linear;
			}

			.eyes .right{
				-webkit-animation: right_eye 0.4s infinite; 
				-webkit-animation-timing-function: linear;
				-webkit-animation-direction: reverse;
				-moz-animation: right_eye 0.4s infinite; 
				-moz-animation-timing-function: linear;
				-moz-animation-direction: reverse;
				animation: right_eye 0.4s infinite; 
				animation-timing-function: linear;
				animation-direction: reverse;
			}
			/**/
			.box{
			  -webkit-animation: box .3s infinite; 
			}
			body{
			  -webkit-animation: bod .3s infinite; 
			}
			@-webkit-keyframes pelk {
				0%   {height:20px;top:calc(28%);}
				45%   {height:20px;top:calc(28%);}
				50%  {height:2px;top:calc(28% + 6px)}
				55%   {height:20px;top:calc(28%);}
				100% {height:20px;top:calc(28%)}
			}
			@-webkit-keyframes left_eye {
				0% { transform: rotate(0deg);}
				50% { transform: rotate(180deg); }
				100% { transform: rotate(360deg); }
			}
			@-webkit-keyframes right_eye {
				0% { transform: rotate(0deg);}
				50% { transform: rotate(180deg); }
				100% { transform: rotate(360deg); }
			}
			@-webkit-keyframes lips {
				0%   {height:35px;}
				50%  {height:2px;top:230px;}
				100%   {height:35px;}
			}

			@-webkit-keyframes face {
				0%   {}
				50%  {transform: scale(1.05) ;}
				100%   {}
			}
			@-webkit-keyframes face_after {
				0%   {}
				50%  {
					width: 40%;
					box-shadow: 103px 27px 46px 8px black;
				}
				100%   {}
			}

			@keyframes pelk {
				0%   {height:20px;top:calc(28%);}
				45%   {height:20px;top:calc(28%);}
				50%  {height:2px;top:calc(28% + 6px)}
				55%   {height:20px;top:calc(28%);}
				100% {height:20px;top:calc(28%)}
			}
			@keyframes left_eye {
				0% { transform: rotate(0deg);}
				50% { transform: rotate(180deg); }
				100% { transform: rotate(360deg); }
			}
			@keyframes right_eye {
				0% { transform: rotate(0deg);}
				50% { transform: rotate(180deg); }
				100% { transform: rotate(360deg); }
			}
			@keyframes lips {
				0%   {height:35px;}
				50%  {height:2px;top:230px;}
				100%   {height:35px;}
			}
			@keyframes face {
				0%   {}
				50%  {transform: scale(1.05) ;}
				100%   {}
			}
			@keyframes face_after {
				0%   {}
				50%  {
					width: 40%;
					box-shadow: 103px 27px 46px 8px black;
				}
				100%   {}
			}

			</style>
		   <div class="box">
			<div class="smiley" >
				<div class="face" >
					<div class="face-overlay"></div>
					<div class="abru">
						<div class="left"></div>
						<div class="right"></div>
					</div>
					<div class="eyes">
						<div class="left-big"></div>
						<div class="left"></div>
						<div class="right-big"></div>
						<div class="right"></div>
					</div>
					<div class="sibil"></div>
					<div class="lips">
					</div>
				</div>
			</div>
			</div>
DIABLO;
			}
		?>
		
	</div>
</body>

</html>