<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  echo "La fecha de hoy es:";
  $fecha = date("d/m/Y");
  echo $fecha;
  echo "<br>";
  echo "La hora actual es:";
  $hora = date("H:i:s");
  echo $hora;
  echo "<br>";
  // d día del mes con dos dígitos "01" al "31"
  // m mes con dos dígitos "01" al "12"
  // Y año con cuatro dígitos
  // Para la hora, los caracteres que serán sustituidos son:
  // H hora con dos dígitos "00" a "23"
  // i minutos con dos dígitos "00" a "59"
  // s segundos con dos dígitos "00" a "59"
  ?>
  <a href="42_fechas2.php">Siguiente problema</a>
</body>

</html>