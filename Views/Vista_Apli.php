<?php 
	session_start();
	if (!isset($_SESSION['NombreUsu'])) {
		header('Location: ../Views/Vista_Login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<div class="w3-container w3-blue w3-center">
		<h1>BIENVENIDO A TU CUENTA</h1>
	</div>
	<p>
	<form class="w3-container w3-center" action="../Views/Vista_ExamenBDD.php" method="post">
			<input type="hidden" name="examenBDD" value="examenBDD">
			<button class="w3-btn w3-blue">Examen sobre Base de Datos</button>
	</form>	
	</p>
	<p>
	<form class="w3-container w3-center" action="../Views/Vista_ExamenProgra.php" method="post">
			<input type="hidden" name="examenProgra" value="examenProgra">
			<button class="w3-btn w3-blue">Examen sobre Lenguajes de programación</button>
	</form>
	</p>

	<p></p>
	<form class="w3-container w3-center" action="../Controllers/Controlador_Aplicante.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-red">Salir</button>
	</form>

</body>
</html>