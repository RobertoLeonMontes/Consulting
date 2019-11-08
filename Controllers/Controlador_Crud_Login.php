<?php 

	require_once('../Connection/Db.php');
	require_once('../model/Modelo_Login.php');
	
	class CrudLogin{

		public function __construct(){}

		 public function insertar($usuario){
		 	$db=DB::conectar();
		    // try{
		 	$insert=$db->prepare('INSERT INTO login (NombreUsu,PassUsu,TipoUsu) VALUES(:NombreUsu,:PassUsu, :TipoUsu)');
		 	$insert->bindValue(':NombreUsu',$usuario->getNombreUsu());
		 	$pass=password_hash($usuario->getPassUsu(),PASSWORD_DEFAULT);
		 	$insert->bindValue(':PassUsu',$pass);
		 	$insert->bindValue(':TipoUsu',$usuario->getTipoUsu());
		 	$insert->execute();
		 	 // }catch(PDOException $e) {
     //             print $e->getMessage ();
     //         }
		 }
		
		public function obtenerUsuario($NombreUsu,$PassUsu){
			
			$db=Db::conectar();
			
			$select=$db->prepare('SELECT IdUsu,NombreUsu,PassUsu,TipoUsu FROM login WHERE NombreUsu = :NombreUsu');
			$select->bindValue('NombreUsu',$NombreUsu);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Login();

			if (password_verify($PassUsu,$registro['PassUsu'])) {				

				$usuario->setIdUsu($registro['IdUsu']);
				$usuario->setNombreUsu($registro['NombreUsu']);
				$usuario->setPassUsu($registro['PassUsu']);
				$usuario->setTipoUsu($registro['TipoUsu']);
			}			
			return $usuario;
		}

		  public function buscarUsuario($NombreUsu){
		 	$db=Db::conectar();
		 	$select=$db->prepare('SELECT * FROM login WHERE NombreUsu= :NombreUsu');
		 	$select->bindValue(':NombreUsu',$NombreUsu);
		 	$select->execute();
		 	$registro=$select->fetch();
		 	if($registro['IdUsu']!=NULL){
		 		$usado=False;
		 	}else{
		 		$usado=True;
		 	}	
		 	return $usado;
		 }
	}
?>