<?php 
	session_start();
	unset($_SESSION['NombreUsu']);
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN CONSULTING & BUSINESS TRAINING</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<div align="center" class="w3-container w3-blue">
	<h1>BIENVENIDO A CONSULTING & BUSINESS TRAINING</h1>
	</div>

	<div align="center" class="w3-container w3-blue">
	<h2>Iniciar Sesión</h2>
	</div>

		<form action="Controllers/Controlador_Login.php" method="post" >
			<div align="center">
				<p>
				<label>Nombre de Usuario</label>
				<input align="center" class="w3-input w3-border" type="text" name="NombreUsu">
				</p>
			</div>
			<div align="center">
			<p>
				<label>Contraseña</label>
				<input align="center" class="w3-input w3-border" type="Password" name="PassUsu">
			</p>
			</div>		
			<div align="center">
			<p>
				<button class="w3-btn w3-blue">Aceptar</button>
				<input type="hidden" name="entrar">
			</p>
			</div>

			<div>
			<p> 
			<a href="Views/Vista_Registrar_Usuario.php"></a>
			</p>
			</div>
		</form>
		<footer>
	<div align="center" class="w3-container w3-blue">
		<h4>CONSULTING & BUSINESS TRAINING</h4>
	</div>
</footer>
</body>
</html>	

