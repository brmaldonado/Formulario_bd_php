<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <header>
      <h2>BR BLOG</h2>
      <form class="buscarRegistro" action="select.php" method="post">
        <input type="text" id="buscar" name="buscando" value="" placeholder="Ingresa una palabra" >
        <input type="submit" id="buscador" name="buscador" value="Buscar">
      </form>
      <form class="nuevoRegistro" action="nuevo.php" method="post">
        <input type="submit" id="nuevo" value="Nuevo Post">
      </form>
    </header>
    <div class="encabezado">
      <input type="text" name="title" value="">
      <input type="text" name="date" value="">
    </div>
    <div class="contenido">
      <textarea name="content" rows="8" cols="80"></textarea>
    </div>
  </body>
</html>
