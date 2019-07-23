<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BR BLOG</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="procesar.php">
  </head>
  <body>
    <style media="screen">
      #pr{
        width: 100%;
        background-color: white;
      }
      h2{
        color: white;
        font-size: 30px;
      }
    </style>
    <header>
      <h2>MI ESPACIO</h2>
      <form class="buscarRegistro" action="select.php" method="post">
        <input type="text" id="buscar" name="buscando" value="" placeholder="Ingresa un ID" >
        <input type="submit" id="buscador" name="buscador" value="Buscar">
      </form>
      <form class="nuevoRegistro" action="nuevo.php" method="post">
        <input type="submit" id="nuevo" value="Nuevo Post">
      </form>
    </header>
      <div class="publicaciones">
        <?php
          if(isset($_GET['error']) && $_GET['error']==1){
            echo "¡Intentalo de nuevo!";
          }
         ?>
        <form class="mostrar" action="select.php" method="post">
          <?php
              //proceso de conexion de bd
              $conexion= new mysqli("localhost", "root", "", "parcial2");

              if($conexion->connect_errno){
                echo "Falló la conexión a MySQL: (".$conexion->connect_errno.")".$conexion->connect_error;
              }
              if(!isset($_POST['buscando']) || $_POST['buscando'] == '' ){
                header('Location:index.php?error=1');
              }else{
                $buscar=$_POST['buscando'];

                // Buscando datos
                $datos=("SELECT id,title,content,date FROM posts WHERE id= $buscar");
                if($res=mysqli_query($conexion, $datos)){
                  while ($row=mysqli_fetch_array($res)){
                  $title=$row[1];
                  $date=$row[3];
                  $content=$row[2];
                   ?>
            <input type="text" id="pr" name="title" value="<?php echo $title ?>"><br>
            <input type="text" disabled id="pr" name="date" value="<?php echo $date ?>"><br>
            <textarea name="content" rows="12" cols="165"><?php echo $content ?></textarea><br>

            <input type="submit" id="nuevo" name="actualizar" value="Actualizar"><?php
            $title=$_POST['title'];
            $content=$_POST['content'];
            //Insertando datos
            $conexion->query("UPDATE posts SET title=$title,content=$content,date=NOW() WHERE id=$buscar");
            echo "Datos insertados correctamente";
            die(); ?>
            </form>

          <?php } ?>
          <?php
}
}


        ?>
      </div>
  </body>
</html>
