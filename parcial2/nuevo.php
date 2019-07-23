<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>BR BLOG</title>
  </head>
  <body>
    <style media="screen">
      #title{
        width: 100%;
        height: 30px;
      }
      #tit{
        color: white;
      }

      p{
        padding-top: 50px;
        padding-bottom: 50px;
      }
      h2{
        color: white;
        font-size: 30px;
      }
    </style>
    <head>
      <meta charset="utf-8">
      <title >MI ESPACIO</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="procesar.php">
    </head>
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
    <form class="form" action="insert.php" method="post">
      <p id="text">Agregando nueva publicación</p>
      <input type="text" id="title" name="titleN" placeholder="Titulo"><br>
      <textarea  name="contentN" id="content" rows="12" cols="165" placeholder="Contenido del artículo"></textarea><br>
      <?php
        if(isset($_GET['error']) && $_GET['error']==1){
          echo "¡Debes llenar todos los campos!";
        }
       ?>
      <br><br> <input type="submit" id="publicar" value="Publicar">
    </form>
  </body>
</html>
