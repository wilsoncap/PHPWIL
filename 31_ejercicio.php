<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>parametro hypervinculo</title>
  </head>
  <body>


    <?php 
    // mostrar los enlaces dinamicamnete
    $conexion = mysqli_connect("localhost", "root", "", "db_php") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo, nombrecurso from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

      while ($reg = mysqli_fetch_array($registros)) {
        echo "<a href=\"31_ejercicio2.php?codigo=$reg[codigo]\">$reg[nombrecurso]</a> <br />";
          }

      mysqli_close($conexion);
    

    ?>
  </body>
</html>
