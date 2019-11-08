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
	
		<h1>BIENVENIDO A TU CUENTA</h1>
	

	<form action="../Views/Vista_ExamenBDD.php" method="post">
		<p>
			<input type="hidden" name="examenBDD" value="examenBDD">
			<button>Examen sobre Base de Datos</button>
		</p>
	</form>	
	
	<form action="../Views/Vista_ExamenProgra.php" method="post">

		<p>
			<input type="hidden" name="examenProgra" value="examenProgra">
			<button >Examen sobre Lenguajes de programación</button>
		</p>
	</form>

	<p></p>
	<form action="../Controllers/Controlador_Aplicante.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button>Salir</button>
	</form>

</body>
</html>