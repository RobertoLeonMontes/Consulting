<?php 
	class pregunta{

		private $pdo;

		public $IdPreg;
		public $Pregunta;
		public $OpcionUno;
		public $OpcionDos;
		public $OpcionTres;
		public $RespuestaCorrecta;

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
 
		public function Listar()
		{
			try
			{
			$result = array();
 
			$stm = $this->pdo->prepare("SELECT IdPreg,Tipo_Examen,Pregunta,OpcionUno,OpcionDos,OpcionTres,RespuestaCorrecta FROM Pregunta");
			$stm->execute();
 
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
	public function Obtener($IdPreg)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT IdPreg,Pregunta,OpcionUno,OpcionDos,OpcionTres,RespuestaCorrecta FROM Pregunta WHERE IdPreg = ?");
			          
 
			$stm->execute(array($IdPreg));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Eliminar($IdPreg)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Pregunta WHERE IdPreg = ?");			          
 
			$stm->execute(array($IdPreg));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE Pregunta SET 
						Pregunta      		= ?,
						OpcionUno          = ?, 
						OpcionDos        = ?,
                        OpcionTres        = ?,
                        RespuestaCorrecta        = ?
						
				    WHERE IdPreg = ?";
 
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->Pregunta, 
                        $data->OpcionUno,                        
                        $data->OpcionDos,
                        $data->OpcionTres,
                        $data->RespuestaCorrecta, 
                        $data->IdPreg
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Registrar(Pregunta $data)
	{
		try 
		{
		$sql = "INSERT INTO Pregunta (Pregunta,OpcionUno,OpcionDos,OpcionTres,RespuestaCorrecta) 
		        VALUES (?, ?, ?, ?, ?)";
 
		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->Pregunta, 
                    $data->OpcionUno,
                    $data->OpcionDos, 
                    $data->OpcionTres, 
                    $data->RespuestaCorrecta 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}	
?>