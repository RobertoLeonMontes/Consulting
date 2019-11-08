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
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA</h1>
	</div>
	<p></p>
	<form class="w3-container" action="../Views/Vista_Registrar_Usuario.php" method="post">
		<input type="hidden" name="registrar" value="registrar">
		<button class="w3-btn w3-green">Registrar nuevo Usuario</button>
	</form>
	<p></p>
	<form class="w3-container" action="../Views/index.php" method="post">
		<input type="hidden" name="crud" value="crud">
		<button class="w3-btn w3-green">CRUD Preguntas</button>
	</form>
	<p></p>
	<form class="w3-container" action="../Controllers/Controlador_Login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
</body>
</html>