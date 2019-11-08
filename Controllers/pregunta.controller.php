<?php
require_once '../model/pregunta.php';

if (isset($_POST['Administrador'])) {
        header('Location: ../Views/Vista_Admin.php');
     }

class preguntaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new pregunta();
    }
    
    public function Index(){
        require_once '../Views/header.php';
        require_once '../Views/pregunta.php';
       
    }
    
    public function Crud(){
        $pregunta = new pregunta();
        
        if(isset($_REQUEST['IdPreg'])){
            $pregunta = $this->model->Obtener($_REQUEST['IdPreg']);
        }
        
        require_once '../Views/header.php';
        require_once '../Views/pregunta-editar.php';
        
    }
    
    public function Guardar(){
        $pregunta = new pregunta();
        
        $pregunta->IdPreg = $_REQUEST['IdPreg'];
        $pregunta->Pregunta = $_REQUEST['Pregunta'];
        $pregunta->OpcionUno = $_REQUEST['OpcionUno'];
        $pregunta->OpcionDos = $_REQUEST['OpcionDos'];
        $pregunta->OpcionTres = $_REQUEST['OpcionTres'];  
        $pregunta->RespuestaCorrecta = $_REQUEST['RespuestaCorrecta'];    
      

        $pregunta->IdPreg > 1
            ? $this->model->Actualizar($pregunta)
            : $this->model->Registrar($pregunta);
        
        header('Location: ../Views/index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IdPreg']);
        header('Location: ../Views/index.php');
    }
}