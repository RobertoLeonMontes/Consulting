<?php
require_once '../model/Modelo_Aplicante.php';

if (isset($_POST['Administrador'])) {
        header('Location: ../Views/Vista_Admin.php');
     }

class aplicanteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new aplicante();
    }
    
    public function IndexDos(){
        require_once '../Views/header.php';
        require_once '../Views/aplicante.php';
       
    }
    
    public function CrudDos(){
        $aplicante = new aplicante();
        
        if(isset($_REQUEST['IdApli'])){
            $aplicante = $this->model->ObtenerAplicante($_REQUEST['IdApli']);
        }
        
        require_once '../Views/header.php';
        require_once '../Views/aplicante-editar.php';
        
    }
    
    public function GuardarDos(){
        $aplicante = new aplicante();
        
        $aplicante->IdApli = $_REQUEST['IdApli'];
        $aplicante->NombreApli = $_REQUEST['NombreApli'];
        $aplicante->ApellidosApli = $_REQUEST['ApellidosApli'];
        $aplicante->EmailApli = $_REQUEST['EmailApli'];
        $aplicante->TelefonoApli = $_REQUEST['TelefonoApli'];  
        $aplicante->Usu_Id = $_REQUEST['Usu_Id'];  
      

        $aplicante->IdApli > 1
            ? $this->model->ActualizarAplicante($aplicante)
            : $this->model->RegistrarAplicante($aplicante);
        
        header('Location: ../Views/indexDos.php');
    }
    
    public function EliminarDos(){
        $this->model->EliminarAplicante($_REQUEST['IdApli']);
        header('Location: ../Views/indexDos.php');
    }
}