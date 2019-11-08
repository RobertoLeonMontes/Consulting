<?php 
    class Db{
        private static $conexion=null;
        private function __construct(){}

        public static function conectar(){
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion=new PDO('mysql:host=localhost;dbname=consulting','root','',$pdo_options);
            return self::$conexion;
        }
     }

	$con = mysqli_connect("localhost","root","","consulting") or die(mysql_error());


    class Database
    {
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=consulting;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
    }
    }

?>