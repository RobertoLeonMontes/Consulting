<?php 
	/*
	*
	*
	*/
	class Respuesta{
		private $sess_id;
		private $IdPreg;
		private $Tipo_Examen;
		private $Pregunta;
		private $OpcionUno;
		private $OpcionDos;
		private $OpcionTres;
		private $RespuestaCorrecta;
		private $Respuesta;

		public function getSess_id(){
			return $this->sess_id;
		}

		public function setSess_id($sess_id){
			$this->sess_id = $sess_id;
		}

		public function getIdPreg(){
			return $this->IdPreg;
		}

		public function setIdPreg($IdPreg){
			$this->IdPreg = $IdPreg;
		}

		public function getTipo_Examen(){
			return $this->Tipo_Examen;
		}

		public function setTipo_Examen($Tipo_Examen){
			$this->Tipo_Examen = $Tipo_Examen;
		}

		public function getPregunta(){
			return $this->Pregunta;
		}

		public function setPregunta($Pregunta){
			$this->Pregunta = $Pregunta;
		}

		public function getOpcionUno(){
			return $this->OpcionUno;
		}

		public function setOpcionUno($OpcionUno){
			$this->OpcionUno = $OpcionUno;
		}

		public function getOpcionDos(){
			return $this->OpcionDos;
		}

		public function setOpcionDos($OpcionDos){
			$this->OpcionDos = $OpcionDos;
		}

		public function getOpcionTres(){
			return $this->OpcionTres;
		}

		public function setOpcionTres($OpcionTres){
			$this->OpcionTres = $OpcionTres;
		}

		public function getRespuestaCorrecta(){
			return $this->RespuestaCorrecta;
		}

		public function setRespuestaCorrecta($RespuestaCorrecta){
			$this->RespuestaCorrecta = $RespuestaCorrecta;
		}

		public function getRespuesta(){
			return $this->Respuesta;
		}

		public function setRespuesta($Respuesta){
			$this->Respuesta = $Respuesta;
		}

	}
?>