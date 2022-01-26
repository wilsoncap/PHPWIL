<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
  $mysql = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");
/// primero consulatmos si existe un registro con ese codigo
  $registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

    // en caso de que $reg = $registro->fetch_array() =  True entonces procedemos a ejecutar el delete
  if ($reg = $registro->fetch_array()) {
    $mysql->query("delete from rubros where codigo=$_REQUEST[codigo]") or
      die($mysql->error);
    echo 'La descripción del rubro que se eliminó es:' . $reg['descripcion'];
    // en caso que la consulta no retorne ningun valor y de False
  } else
    echo 'No existe un rubro con dicho código';

  $mysql->close();
  ?>
</body>
</html>