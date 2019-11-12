<?php 
	/*
	*
	*
	*/
	class Aplicante{
		private $pdo;

		public $IdApli;
		public $NombreApli;
		public $ApellidosApli;
		public $EmailApli;
		public $TelefonoApli;
		public $Usu_Id;

		public function __CONSTRUCT()
		{	
			try
			{
				$this->pdo = Database::StartUp();     
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
 
		public function ListarAplicante()
		{
			try
			{
			$result = array();
 
			$stm = $this->pdo->prepare("SELECT * FROM Aplicante");
			$stm->execute();
 
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
	public function ObtenerAplicante($IdApli)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Aplicante WHERE IdApli = ?");
			          
 
			$stm->execute(array($IdApli));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function EliminarAplicante($IdApli)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Aplicante WHERE IdApli = ?");			          
 
			$stm->execute(array($IdApli));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function ActualizarAplicante($data)
	{
		try 
		{
			$sql = "UPDATE Aplicante SET 
						NombreApli     		= ?,
						ApellidosApli       = ?, 
						EmailApli        	= ?,
                        TelefonoApli        = ?,
                        Usu_Id 				= ?

				    WHERE IdApli = ?";
 
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->NombreApli, 
                        $data->ApellidosApli,                        
                        $data->EmailApli,
                        $data->TelefonoApli,
                        $data->Usu_Id,
                        $data->IdApli
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function RegistrarAplicante(Aplicante $data)
	{
		try 
		{
		$sql = "INSERT INTO Aplicante (NombreApli,ApellidosApli,EmailApli,TelefonoApli,Usu_Id) 
		        VALUES (?, ?, ?, ?, ?)";
 
		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->NombreApli, 
                    $data->ApellidosApli,
                    $data->EmailApli, 
                    $data->TelefonoApli,
                    $data->Usu_Id
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>