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

    // solo se ejecuta el metodo con la sentencia SQL
  $mysql->query("insert into articulos(descripcion,precio,codigorubro) 
      values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])") or
    die($mysql->error);

  echo 'El nuevo artículo se almacenó';
  ?>
</body>
</html>