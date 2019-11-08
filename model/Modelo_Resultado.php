<?php 
	/*
	*
	*
	*/
	class Resultado{
		private $IdResul;
		private $Resultado;
		private $Buenas;
		private $Malas;
		private $Total;
		private $Id_Usu_FK;
		private $Tipo_Exam;

		public function getIdResul(){
			return $this->IdResul;
		}

		public function setIdResul($IdResul){
			$this->IdResul = $IdResul;
		}

		public function getResultado(){
			return $this->Resultado;
		}

		public function setResultado($Resultado){
			$this->Resultado = $Resultado;
		}

		public function getBuenas(){
			return $this->Buenas;
		}

		public function setBuenas($Buenas){
			$this->Buenas = $Buenas;
		}

		public function getMalas(){
			return $this->Malas;
		}

		public function setMalas($Malas){
			$this->Malas = $Malas;
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