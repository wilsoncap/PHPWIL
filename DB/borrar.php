<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Borrar</title>
</head>
<body>
    <?php
    // En esta segunda página efectuamos dos llamadas a la función mysqli_query, una para consultar si existe el 
    // mail ingresado y otra para efectuar el borrado del registro respectivo. Si no existe el mail ingresado 
    // mostramos un mensaje de tal situación.
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo from alumnos 
                        where email='$_REQUEST[email]'") or // crea la matriz sobre la cual va iterar
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from alumnos where email='$_REQUEST[email]'") or //sobre esa matrix creada itera, busca y efectua el borrado
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del alumno con dicho mail.";
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>
</body>
</html>