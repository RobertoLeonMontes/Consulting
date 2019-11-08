<?php 
	/*
	*
	*
	*/
	class Examen{
		private $IdExam;
		private $NombreExamen;
		private $TipoExamen;
		private $Apli_Id;

		public function getIdExam(){
			return $this->IdExam;
		}

		public function setIdExam($IdExam){
			$this->IdExam = $IdExam;
		}

		public function getNombreExamen(){
			return $this->NombreExamen;
		}

		public function setNombreExamen($NombreExamen){
			$this->NombreExamen = $NombreExamen;
		}

		public function getTipoExamen(){
			return $this->TipoExamen;
		}

		public function setTipoExamen($TipoExamen){
			$this->TipoExamen = $TipoExamen;
		}

		public function getApli_Idu(){
			return $this->Apli_Id;
		}

		public function setApli_Id($Apli_Id){
			$this->Apli_Id = $Apli_Id;
		}

	}
?>