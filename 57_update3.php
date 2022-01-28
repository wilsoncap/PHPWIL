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

  $mysql->query("update articulos set 
                           descripcion='$_REQUEST[descripcion]',
                           precio=$_REQUEST[precio],
                           codigorubro=$_REQUEST[codigorubro]
              where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

  echo 'Se modificaron los datos del artículo';

  $mysql->close();

  ?>
</body>
</html>