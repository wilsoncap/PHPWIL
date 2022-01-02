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
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombre,codigocurso
                        from alumnos where email='$_REQUEST[email]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    // aunque sea un solo registro. En caso de retornar un vector asociativo la condición del if se verifica como 
    // verdadera y pasa a mostrar los datos, en caso de retornar false se ejecuta el else.
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Curso:";
    switch ($reg['codigocurso']) {
      case 1:
        echo "PHP";
        break;
      case 2:
        echo "ASP";
        break;
      case 3:
        echo "JSP";
        break;
    }
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>
</body>
</html>