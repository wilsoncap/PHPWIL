<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado</title>
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
  $conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($conexion->connect_error)
    die('Problemas con la conexion a la base de datos');

  $registros = $conexion->query("select codigo,descripcion from rubros") or
    die($conexion->error);
  // Ahora llamamos al método query pasando un string con el comando SQL select. El método query retorna un objeto
  // de la clase mysqli_result:

  echo '<table class="tablalistado">';
  echo '<tr><th>Código</th><th>Descripción</th></tr>';
  while ($reg = $registros->fetch_array()) {
    // El objeto de la clase mysqli_result tiene un método llamado fetch_array que retorna de a uno cada una de 
    // los registros recuperados con el comando SQL select:
    echo '<tr>';
    echo '<td>';
    echo $reg['codigo'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcion'];
    echo '</td>';
    echo '</tr>';
  }
  echo '<table>';

  $conexion->close();

  ?>
</body>

</html>