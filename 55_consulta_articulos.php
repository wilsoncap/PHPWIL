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


    // realizo la consulta con el inner join con la condicion del where al final
  $registros = $mysql->query("select ar.descripcion as descripcionart,
                                     precio,
                                     ru.descripcion as descripcionrub 
                                  from articulos as ar
                                  inner join rubros as ru on ru.codigo=ar.codigorubro
                                  where ar.codigo=$_REQUEST[codigo]") or
    die($mysql->error);


    // Mediante un if verificamos mediante la llamada al método fetch_array si se recuperó una fila con el select, en caso afirmativo se ejecuta 
    // el bloque del verdadero del if donde mostramos los datos que quedaron almacenados en el vector $reg.
  if ($reg = $registros->fetch_array()) {
    echo 'Descripción:' . $reg['descripcionart'] . '<br>';
    echo 'Precio:' . $reg['precio'] . '<br>';
    echo 'Rubro:' . $reg['descripcionrub'] . '<br>';
  } else
    echo 'No existe un artículo con dicho código';

  $mysql->close();

  ?>
</body>
</html>