<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

    <style>
    .tablalistado {
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: 20px;
    }

    .tablalistado th {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffd040;
    }

    .tablalistado td {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73;
    }
  </style>
</head>
<body>
  <?php
  $mysql = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select ar.codigo as codigoart,
                                     ar.descripcion as descripcionart,
                                     precio,
                                     ru.descripcion as descripcionrub 
                                  from articulos as ar
                                  inner join rubros as ru on ru.codigo=ar.codigorubro") or
    die($mysql->error);
    // En el from indicamos la tabla principal que estamos consultando que es la tabla articulos y luego con la cláusula inner join procedemos 
    // a indicar el nombre de la tabla relacionada y los dos campos por los que se emparejan: ru.codigo=ar.codigorubro
  echo '<table class="tablalistado">';
  // <tr> -> Fila    <th>-> Columna
  echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['codigoart'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionart'];
    echo '</td>';
    echo '<td>';
    echo $reg['precio'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionrub'];
    echo '</td>';
    echo '</tr>';
  }
  echo '<table>';

  $mysql->close();

  ?>
</body>
</html>