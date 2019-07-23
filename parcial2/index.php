<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Mi Espacio </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="procesar.php">
  </head>
  <style media="screen">
    .pr, #pr1, #pr2{
      border: none;
      border-radius: 3px;
      background-color: purple;
      width: 100%;
    }
    #tit{
      color: white;
    }

    #text{
      padding-top: 50px;
      padding-bottom: 50px;
    }
    #pr1{
      color: white;
      font-size: 20px;
    }
    #pr2{
      color:red;
      font-size: #BF401A;
    }
    header{
      background-color: purple;
    }

    textarea{
      border-top: none;
      padding-bottom: 15px;
      background-color: white;
    }
    h2{
      color: white;
      font-size: 30px;
    }
  </style>
  <body>
    <header>
      <h2>MI ESPACIO</h2>
      <form class="buscarRegistro" action="select.php" method="post">
        <input type="text" id="buscar" name="buscando" value="" placeholder="Ingresa una palabra" >
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
        <p id="text">Mostrando publicaciones recientes</p>
        <form class="mostrar" action="select.php" method="post">
          <?php
              //proceso de conexion de bd
              $conexion= new mysqli("localhost", "root", "", "parcial2");

              if($conexion->connect_errno){
                echo "Falló la conexión a MySQL: (".$conexion->connect_errno.")".$conexion->connect_error;
              }else{
                // Buscando datos
                $datos=("SELECT * FROM posts");
                if($res=mysqli_query($conexion, $datos)){
                while ($row=mysqli_fetch_array($res)){?>
                  <div class="pr">
                    <input disabled id="pr1" name="title" value="<?php echo $row['title'] ?>"><br>
                    <input disabled type="text" id="pr2" name="date"  value="<?php echo $row['date'] ?>"><br>
                  </div>
          <textarea disabled name="content" rows="8" cols="162"><?php echo $row['content'] ?></textarea>
        </form><?php  }
      }
    }
        ?>
      </div>
  </body>
</html>
