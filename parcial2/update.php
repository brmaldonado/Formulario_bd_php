<?php
//proceso de conexion de bd
$conexion= new mysqli("localhost", "root", "", "parcial2");

if($conexion->connect_errno){
  echo "Falló la conexión a MySQL: (".$conexion->connect_errno.")".$conexion->connect_error;
}
//validaciones
  $title=$_POST['title'];
  $content=$_POST['content'];
  //Insertando datos
  $conexion->query("UPDATE posts SET title=$title,content=$content,date=NOW() WHERE id=$buscar");
  echo "Datos insertados correctamente";
  die();
?>
