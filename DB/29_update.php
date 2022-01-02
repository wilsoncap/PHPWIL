<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>actualizar curso</title>
</head>
<body>
    <?php
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos
                        where email='$_REQUEST[email]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($regalu = mysqli_fetch_array($registros)) {
     // En caso de existir un alumno con dicho mail, el if se verifica verdadero y pasamos a poblar el control 
    // select con los distintos cursos que contiene la tabla "cursos":
    ?>
    <form action="29_update2.php" method="post">
      <input type="hidden" name="mailviejo" value="<?php echo $regalu['email'] ?>">
      <select name="codigocurso">
        <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg = mysqli_fetch_array($registros)) {
           
            if ($regalu['codigocurso'] == $reg['codigo'])
            // Para que aparezca seleccionado el curso actual debemos inicializar lo marca option con la propiedad selected. 
            // Es decir que el if dentro del while se verifica verdadero una solo vez.
              echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
            else
              echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
          }
          ?>
      </select>
      <br>
      <input type="submit" value="Modificar">
    </form>
  <?php
  } else
    echo "No existe alumno con dicho mail";
  ?>
</body>
</html>