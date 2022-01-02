<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>funciones mysql</title>
</head>
<body>
    <?php
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select count(*) as cantidad from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $reg = mysqli_fetch_array($registros);
  echo "La cantidad de alumnos inscriptos son :" . $reg['cantidad'];
  // PENDENTE EJERCICIO TEMA #28
  ?>
</body>
</html>