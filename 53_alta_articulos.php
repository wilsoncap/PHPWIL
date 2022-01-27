<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form method="post" action="53_alta_articulos2.php">
    Ingrese descripcion del artículo:
    <input type="text" name="descripcion" required>
    <br>
    Ingrese precio:
    <input type="text" name="precio" required>
    <br>
    Seleccione rubro:
    <select name="codigorubro">
      <?php
      $mysql = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
      if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

        // se ejecuta el metodo query con la sentencia, pero se guarda su resulatdo en una variable
      $registros = $mysql->query("select codigo,descripcion from rubros") or
        die($mysql->error);
      while ($reg = $registros->fetch_array()) {
        echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['descripcion'] . "</option>";
      }
      ?>
    </select>
    <br>
    <input type="submit" value="confirmar">
  </form>
</body>
</html>