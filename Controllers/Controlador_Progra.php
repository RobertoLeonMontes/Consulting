<?php
error_reporting(1);
include("../Connection/Db.php");
// extract($_POST);
// extract($_GET);
// extract($_SESSION);
$db=DB::conectar();
// $query="select * from Pregunta";

//$rs=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
$rs=$db->prepare('SELECT * FROM Pregunta WHERE IdExam=$IdEx');
if(!isset($_SESSION[NumPreg]))
{
	$_SESSION[NumPreg]=0;
	//mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error())
	//$db->prepare('DELETE FROM Pregunta WHERE ');
	//;
	$_SESSION[RespuestaCorrecta]=0;	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[NumPreg]);
				$row= mysqli_fetch_row($rs);	
				
				$insertUno=$db->prepare('INSERT into Pregunta(IdPreg, Modulo, Pregunta, OpcionUno,OpcionDos,OpcionTres,OpcionCuatro,OpcionCinco,OpcionSeis,Respuesta, RespuestaCorrecta) values ($IdEx,$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$ans,$row[10]');

				// mysqli_query($db,"insert into Pregunta(IdPreg, Modulo, Pregunta, OpcionUno,OpcionDos,OpcionTres,OpcionCuatro,OpcionCinco,OpcionSeis,Respuesta, RespuestaCorrecta) values ('$IdEx','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$row[8]','$ans'),'$row[9]'") or die(mysql_error());
				if($ans==$row[10])
				{
							$_SESSION[RespuestaCorrecta]=$_SESSION[RespuestaCorrecta]+1;
				}
				$_SESSION[NumPreg]=$_SESSION[NumPreg]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[NumPreg]);
				$row= mysqli_fetch_row($rs);	
				
				$insertDos=$db->prepare('INSERT INTO Pregunta(IdPreg, Modulo, Pregunta, OpcionUno,OpcionDos,OpcionTres,OpcionCuatro,OpcionCinco,OpcionSeis,Respuesta, RespuestaCorrecta) VALUES ($IdEx,$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$ans,$row[10]');

				// mysqli_query($db,"insert into Pregunta(IdPreg, Modulo, Pregunta, OpcionUno,OpcionDos,OpcionTres,OpcionCuatro,OpcionCinco,OpcionSeis,Respuesta, RespuestaCorrecta) values ('$IdEx,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$row[8]','$ans'),'$row[9]'") or die(mysql_error());
				if($ans==$row[10])
				{
							$_SESSION[RespuestaCorrecta]=$_SESSION[RespuestaCorrecta]+1;
				}
				$_SESSION[NumPreg]=$_SESSION[NumPreg]+1;
		}
				echo "<h1 class=head1> Resultado</h1>";
				$_SESSION[NumPreg]=$_SESSION[NumPreg]+1;
				echo "<Table align=center><tr class=tot><td> total Preguntas<td> $_SESSION[NumPreg]";
				echo "<tr class=tans><td>Respuestas correctas<td>".$_SESSION[RespuestaCorrecta];
				$w=$_SESSION[NumPreg]-$_SESSION[RespuestaCorrecta];
				echo "<tr class=fans><td>Respuesta incorrecta<td> ". $w;
				echo "</table>";
				

				$insertTres=$db->prepare('INSERT into Resultado(IdResul,Total,Id_Usu,Tipo_Exam) values($IdEx,$_SESSION[RespuestaCorrecta]),$Id_Us,$TExamen');
				// mysqli_query($db,"insert into Resultado(IdResul,Total,Id_Usu,Tipo_Exam) values('$IdEx,$_SESSION[RespuestaCorrecta])",'$Id_Us','$TExamen') or die(mysqli_error());
				//echo "<h1 align=center><a href=review.php>Pregunta de repaso</a> </h1>";
				unset($_SESSION[NumPreg]);
				unset($_SESSION[TExamen]);
				unset($_SESSION[IdEx]);
				unset($_SESSION[RespuestaCorrecta]);
				unset($_SESSION[Id_Us]);
				exit;
		}
// 	}
// }
		$rs=$select;
		$select=$db->prepare('SELECT * FROM Pregunta where IdExam=$IdEx');
		
// $rs=mysqli_query($db,"select * from Pregunta where IdPreg=$IdEx") or die(mysqli_error());
if($_SESSION[NumPreg]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[NumPreg]);
echo "<h1 class=head1>Algún error ocurrió</h1>";
session_destroy();
echo "Please <a href=../Views/Vista_Login.php> Empezar de nuevo</a>";
exit;
}
mysqli_data_seek($rs,$_SESSION[NumPreg]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=../Views/Vista_Apli.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[NumPreg]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[3]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[4]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[6]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[7]";
echo "<tr><td class=style8><input type=radio name=ans value=5>$row[8]";
echo "<tr><td class=style8><input type=radio name=ans value=6>$row[9]";

if($_SESSION[NumPreg]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</body>
</html>