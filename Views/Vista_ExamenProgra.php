<!DOCTYPE>
<html>
<?php 
include("../Controllers/Controlador_Header.php");
require '../Connection/Db.php';
session_start(); 
?>
<head>
<title>EXAMEN DE PROGRAMACION</title>
<style>
body {
  background: url("../Connection/bg.jpg");
	background-size:100%;
	background-repeat: no-repeat;
	position: relative;
	background-attachment: fixed;
}
/* button */
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
	background-color: #ccc11e;
	font-size: 28px;
  padding: 20px;
	
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}

.button3:hover {
    background-color: #f4e542;
    color: Black;
}
</style>
</head>
<body><center>
<div class="title">Programación</div>

<?php 										
      include("../Controllers/Controlador_Header.php");					
			if (isset($_POST['click']) || isset($_GET['start'])) {
			@$_SESSION['clicks'] += 1 ;
			$c = $_SESSION['clicks'];
			if(isset($_POST['Respuesta'])) { $userselected = $_POST['Respuesta'];
			$fetchqry2 = "UPDATE `Pregunta` SET `Respuesta`='$userselected' WHERE `IdPreg`=$c-1"; 
			$result2 = mysqli_query($con,$fetchqry2);
			}														
 			} else {
					$_SESSION['clicks'] = 0;
			}
?>

<div class="bump"><br><form>
<?php 
  
  if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>Iniciar Examen</span></button> 

<?php 

} 

?>

  </form></div>
  <form action="" method="post">  				
  <table>

    <?php if(isset($c)) {   $fetchqry = "SELECT `IdPreg`, `Pregunta`,`OpcionUno`,`OpcionDos`,`OpcionTres`,`RespuestaCorrecta`,`Respuesta` from Pregunta where IdPreg='$c' and Tipo_Examen=1 ORDER BY RAND() LIMIT 10"; 
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
  ?>

  <tr><td><h3><br>
  
  <?php 
  echo @$row['Pregunta'];
  ?>

  </h3></td></tr> 

  <?php 
  if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 11){ 

  ?>
  
  <tr><td><input required type="radio" name="Respuesta" value="<?php echo $row['OpcionUno'];?>">&nbsp;<?php echo $row['OpcionUno']; ?><br>
  <tr><td><input required type="radio" name="Respuesta" value="<?php echo $row['OpcionDos'];?>">&nbsp;<?php echo $row['OpcionDos'];?></td></tr>
  <tr><td><input required type="radio" name="Respuesta" value="<?php echo $row['OpcionTres'];?>">&nbsp;<?php echo $row['OpcionTres']; ?></td></tr>
  
  <tr><td><button class="button3" name="click" >Siguiente</button></td></tr> 

  <?php 

  }  

  ?> 
  <form>
  
  <?php 

  if($_SESSION['clicks']>10){ 
	$qry3 = "SELECT `RespuestaCorrecta`, `Respuesta` FROM `Pregunta`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['RespuestaCorrecta']==$row3['Respuesta']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 
 ?> 
 
 
 <h2>Resultado</h2>
 <span>No. de respuestas correctas:&nbsp;
  
  <?php
  echo $no = @$_SESSION['score']; 
  session_unset();

 ?>
   
 </span><br>
 <span>Tu Resultado:&nbsp
  <?php

  echo $no*2; 

  ?>
      
  </span>
  
  <?php 

  } 

  ?>
</center>
</body>
</html>