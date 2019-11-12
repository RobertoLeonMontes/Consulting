<?php
require_once '../Connection/Db.php';
$controller = 'aplicante';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['cDos']))
{
    require_once "../Controllers/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexDos();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['cDos']);
    $accion = isset($_REQUEST['aDos']) ? $_REQUEST['aDos'] : 'IndexDos';
    
    // Instanciamos el controlador
    require_once "../Controllers/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}