<?php 
	/*
	*
	*
	*/
	class Resultado{
		private $IdResul;
		private $Id_Usu_FK;
		private $Tipo_Exam;
		private $Total;

		public function getIdResul(){
			return $this->IdResul;
		}

		public function setIdResul($IdResul){
			$this->IdResul = $IdResul;
		}

		public function getTotal(){
			return $this->Total;
		}

		public function setTotal($Total){
			$this->Total = $Total;
		}

		public function getId_Usu_FK(){
			return $this->Id_Usu_FK;
		}

		public function setId_Usu_FK($Id_Usu_FK){
			$this->Id_Usu_FK = $Id_Usu_FK;
		}

		public function getTipo_Exam(){
			return $this->Tipo_Exam;
		}

		public function setTipo_Exam($Tipo_Exam){
			$this->Tipo_Exam = $Tipo_Exam;
		}
	}
?>