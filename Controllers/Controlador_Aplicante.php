<?php 	
	require_once ('../model/Modelo_Aplicante.php');
	require_once ('../Connection/Db.php');
	
	session_start();
	
	 if (isset($_POST['examenBDD'])) {
	 	header('Location: ../Views/Vista_ExamenBDD.php');
	 }

	 elseif (isset($_POST['examenProgra'])) {
	 	header('Location: ../Views/Vista_ExamenProgra.php');
	}
	
	if(isset($_POST['salir'])){ 
	  	header('Location: ../Views/Vista_Login.php');
	 	unset($_SESSION['NombreUsu']);
	}
?>