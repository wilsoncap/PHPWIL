<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>parametro hypervinvulo</title>
</head>
<body>
  <h2>operacion por el metodo $_REQUESt  </h2>
    <?php
  echo "Listado de la tabla del $_REQUEST[tabla] <br>";// el vector llega con un index tabla y su respectivo valor
  for ($f = 1; $f <= 10; $f++) {
    $valor = $f * $_REQUEST['tabla'];
    echo $valor . "-";
    // $_GET y $_POST. El primero almacena los datos pasados en el hipervínculo,
    // El vector asociativo $_POST almacena los datos que se pasan por medio de un formulario HTML.
    //El vector asociativo $_REQUEST almacena tanto los datos del vector $_GET como el $_POST 
  }
  ?>
<h2>Operacion por el metodo $_GET</h2>
    <?php
  echo "Listado de la tabla del $_GET[tabla] <br>";
  for ($f = 1; $f <= 10; $f++) {
    $valor = $f * $_GET['tabla'];
    echo $valor . "-";
  }
  ?>
</body>
</html>