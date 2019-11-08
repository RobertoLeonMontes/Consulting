<?php 
	/*
	*
	*
	*/
	class Login{
		private $IdUsu;
		private $NombreUsu;
		private $PassUsu;
		private $TipoUsu;

		public function getIdUsu(){
			return $this->IdUsu;
		}

		public function setIdUsu($IdUsu){
			$this->IdUsu = $IdUsu;
		}

		public function getNombreUsu(){
			return $this->NombreUsu;
		}

		public function setNombreUsu($NombreUsu){
			$this->NombreUsu = $NombreUsu;
		}

		public function getPassUsu(){
			return $this->PassUsu;
		}

		public function setPassUsu($PassUsu){
			$this->PassUsu = $PassUsu;
		}

		public function getTipoUsu(){
			return $this->TipoUsu;
		}

		public function setTipoUsu($TipoUsu){
			$this->TipoUsu = $TipoUsu;
		}

	}
?>