<?php
//proceso de conexion de bd
$conexion= new mysqli("localhost", "root", "", "parcial2");

if($conexion->connect_errno){
  echo "Falló la conexión a MySQL: (".$conexion->connect_errno.")".$conexion->connect_error;
}
//validaciones
if(!isset($_POST['titleN']) || $_POST['titleN'] == '' ){
  if(!isset($_POST['contentN']) || $_POST['contentN'] == '' ){
  header('Location:nuevo.php?error=1');
}}else{
  $title=$_POST['titleN'];
  $content=$_POST['contentN'];
  //Insertando datos
  $conexion->query("INSERT INTO posts (title, content, date ) VALUES('$title', '$content', NOW())");
  echo "Datos insertados correctamente";
  die();
}
?>
