<html>
<head>
<title>Conexion</title>
</head>
<body>

<?php
include("Connection/Db.php");

// $registros=mysqli_query($con,"SELECT IdUsu,NombreUsu,PassUsu,TipoUsu FROM login WHERE NombreUsu = NombreUsu") or
//   die("Problemas en el select:".mysqli_error($con));

$rs=mysqli_query($con,"SELECT Pregunta,OpcionUno,OpcionDos,OpcionTres,RespuestaCorrecta FROM Pregunta") or die("Problemas en el select:".mysqli_error($con));

// while ($reg=mysqli_fetch_array($registros))
// {
//   echo "ID:".$reg['IdUsu']."<br>";
//   echo "Nombre:".$reg['NombreUsu']."<br>";
//   echo "Pass:".$reg['PassUsu']."<br>";
//   echo "Tipo:";
//   switch ($reg['TipoUsu']) {
//     case 1:echo "Administrador";
//            break;
//     case 2:echo "Aplicante";
//            break;
//   }
//   echo "<br>";
//   echo "<hr>";
// }

while ($reg=mysqli_fetch_array($rs))
{

  echo "Pregunta:".$reg['Pregunta']."<br>";
  echo "Res1:".$reg['OpcionUno']."<br>";
  echo "Res2:".$reg['OpcionDos']."<br>";
  echo "Res3:".$reg['OpcionTres']."<br>";
  echo "Correcta:".$reg['RespuestaCorrecta']."<br>";
  echo "<br>";
  echo "<hr>";
}


  mysqli_close($con);
?>

</body>
</html>