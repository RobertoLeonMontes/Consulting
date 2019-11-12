<!DOCTYPE html>
<html>
<head>
	<title>Error al ingresar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
		<div class="w3-container w3-blue w3-center">
			<h1>CONSULTING & BUSINESS TRAINING</h1>
		</div>
</header>
	<div class="w3-container w3-red">
		<h1><?php echo $_GET['mensaje'];?></h1>
		<a href="../Views/Vista_Login.php">Volver a ingresar</a>
	</div>
</body>
</html>