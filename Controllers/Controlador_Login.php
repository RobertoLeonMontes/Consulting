<?php 
	
	require_once ('../model/Modelo_Login.php');
	require_once ('../Controllers/Controlador_Crud_Login.php');
	require_once ('../Connection/Db.php');
	
	session_start();
	$Tipo='1';
	$TipoDos='2';
	$usuario=new Login();
	$crud=new CrudLogin();
	
	 if (isset($_POST['registrarse'])) {
	 	$usuario->setNombreUsu($_POST['NombreUsu']);
	 	$usuario->setPassUsu($_POST['PassUsu']);
	 	$usuario->setTipoUsu($_POST['TipoUsu']);
	 	
	 	if ($crud->buscarUsuario($_POST['NombreUsu'])) {
	 		$crud->insertar($usuario);
	 		header('Location: ../Views/Vista_Login.php');
	 	}else{
	 		header('Location: ../Views/Vista_Error.php?mensaje=El nombre de usuario ya existe');
	 	}				
	 }


	elseif (isset($_POST['entrar'])) {
		$usuario=$crud->obtenerUsuario($_POST['NombreUsu'],$_POST['PassUsu']);
		
			if ($usuario->getTipoUsu()==$TipoDos){
				$_SESSION['NombreUsu']=$usuario;
				header('Location: ../Views/Vista_Apli.php');
			}
			elseif($usuario->getTipoUsu()==$Tipo){
		    		$_SESSION['NombreUsu']=$usuario;
		    		header('Location: ../Views/Vista_Admin.php');
			}
			else{
				header('Location: ../Views/Vista_Error.php?mensaje=Tus nombre de usuario o clave son incorrectos');
			}
		
	}
	elseif(isset($_POST['salir'])){ 
	 	header('Location: ../Views/Vista_Login.php');
		unset($_SESSION['NombreUsu']);
	}
?>