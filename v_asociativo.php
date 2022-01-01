<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $suma = 0;
  foreach ($_REQUEST as $clave => $valor) {/// recuperar indice y valor del vector RREQUEST
    echo "Valor: " . $valor;
    echo "<br>";
    $suma = $suma + $valor;
  }
  echo "La suma es: " . $suma;
  ?>
</body>

</html>