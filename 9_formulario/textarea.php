<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  // El dato ingresado en el textarea se rescata en forma idéntica que los controles text, es decir mediante el 
  // vector asociativo $_REQUEST:
  echo "El nombre ingresado:" . $_REQUEST['nombre'];
  echo "<br>";
  echo "El curriculum:" . $_REQUEST['curriculum'];
  ?>
</body>

</html>