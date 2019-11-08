
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
	<h1>BIENVENIDO A CONSULTING & BUSINESS TRAINING</h1>

	<h2>Iniciar Sesión</h2>

		<form action="../Controllers/Controlador_Login.php" method="post" >
			<p>
				<label>Nombre de Usuario</label>
				<input type="text" name="NombreUsu">
			</p>

			<p>
				<label>Contraseña</label>
				<input type="Password" name="PassUsu">
			</p>		

			<p>
				<button>Aceptar</button>
				<input type="hidden" name="entrar">
			</p>

			<p>Si aún no tienes cuenta ve al siguiente link 
			<a href="../Views/Vista_Registrar_Usuario.php">registrarse</a>
			</p>
		</form>
</body>
</html>	