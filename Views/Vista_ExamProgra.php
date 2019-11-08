<!DOCTYPE html>
<html>
<head>
	<title>EXAMEN SOBRE LENGUAJES DE PROGRAMACIÓN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-black">
		<h1>CONSULTING & BUSINESS TRAINING</h1>
	</div>
</header>

		<div class="w3-container w3-green">
			<h1>LENGUAJES DE PROGRAMACIÓN</h1>>
			<h2>Selecciona la respuesta correcta a cada pregunta</h2>
		</div>
		<div>
			
			<form class="w3-container" action="../Controllers/Controlador_Proga.php" method="post">
				
				<p>
					<label class="w3-label">PREGUNTA</label>
					<input class="w3-input w3-border" type="text" name="question">
				</p>

				<p>
    				<input type="radio" name="opcion1" value="opcion1">
				</p>
				<p>
    				<input type="radio" name="opcion2" value="opcion2">
				</p>
				
				<p>
    				<input type="radio" name="opcion3" value="opcion3">
				</p>

				<p>
					<input type="hidden" name="siguiente" value="siguiente">
					<button class="w3-btn w3-green">siguiente</button>
				</p>
				
			</form>
		</div>

<footer>
	
	<div class="w3-container w3-black">
		<h4>CONSULTING & BUSINESS TRAINING</h4>
	</div>

</footer>


</body>
</html>