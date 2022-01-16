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
$conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($conexion->connect_error)
    die('Problemas con la conexion a la base de datos');

  $registros = $conexion->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
    die($conexion->error);

  // A diferencia del listado procedemos a llamar al método fetch_array() en un if. Esto debido a que solo puede 
  // haber un rubro con el código ingresado por teclado. Si el if se verifica verdadero procede a mostrar la 
  // descripción del rubro, en caso contrario se ejecuta el else del if:

  if ($reg = $registros->fetch_array())
    echo 'La descripción del rubro es:' . $reg['descripcion'];
  else
    echo 'No existe un rubro con dicho código';

  $conexion->close();

  ?>

</body>
</html>