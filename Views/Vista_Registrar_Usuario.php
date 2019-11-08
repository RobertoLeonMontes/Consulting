<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuario</title>
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
			<h1>Registrar Usuario</h1>
		</div>
		<div>
			<form class="w3-container" action="../Controllers/Controlador_Login.php" method="post">
				<p>
					<label class="w3-label">Nombre de Usuario</label>
					<input class="w3-input w3-border" type="text" name="NombreUsu">
				</p>
				<p>
					<label class="w3-label">Contraseña</label>
					<input class="w3-input w3-border" type="password" name="PassUsu">
				</p>
				<p>

					<select name="TipoUsu">
    					<option value="1">Administrador</option>
    					<option value="2">Aplicante</option>
					</select>
				</p>
			
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="w3-btn w3-green">Registrarse</button>
				</p>
				
				<p><a href="../Views/Vista_Login.php">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div class="w3-container w3-black">
		<h4>CONSULTING & BUSINESS TRAINING</h4>
	</div>
</footer>

</body>
</html>