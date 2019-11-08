<?php 
	/*
	*
	*
	*/
	class Aplicante{
		private $IdApli;
		private $NombreApli;
		private $ApellidosApli;
		private $EmailApli;
		private $TelefonoApli;
		private $Usu_Id;

		public function getIdApli(){
			return $this->IdApli;
		}

		public function setIdApli($IdApli){
			$this->IdApli = $IdApli;
		}

		public function getNombreApli(){
			return $this->NombreApli;
		}

		public function setNombreApli($NombreApli){
			$this->NombreApli = $NombreApli;
		}

		public function getApellidosApli(){
			return $this->ApellidosApli;
		}

		public function setApellidosApli($ApellidosApli){
			$this->ApellidosApli = $ApellidosApli;
		}

		public function getEmailApli(){
			return $this->EmailApli;
		}

		public function setEmailApli($EmailApli){
			$this->EmailApli = $EmailApli;
		}

		public function getTelefonoApli(){
			return $this->TelefonoApli;
		}

		public function setTelefonoApli($TelefonoApli){
			$this->TelefonoApli = $TelefonoApli;
		}

		public function getUsu_Id(){
			return $this->Usu_Id;
		}

		public function setUsu_Id($Usu_Id){
			$this->Usu_Id = $Usu_Id;
		}
	}
?>