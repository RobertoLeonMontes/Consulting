
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['NombreUsu']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['NombreUsu']))
	{
	 echo "<div align=\"right\"><strong><a href=\"../Views/Vista_Apli.php\"> Escoger Prueba </a>|<a href=\"../Views/Vista_Login.php\">Desconectar</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
