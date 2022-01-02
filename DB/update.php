<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>actualizar registro</title>
</head>
<body>
    <?php

  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos
                        where email='$_REQUEST[email]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="update3.php" method="post">
      Ingrese nuevo mail:
      <input type="text" name="mailnuevo" value="<?php echo $reg['email'] ?>"> <!--cargamos el valor de la caja texto con lo que nos retorne myqli-fech-array() var.[email]-->
      <br>
      <input type="hidden" name="mailviejo" value="<?php echo $reg['email'] ?>">
      <br>
      <!--Es decir que podemos disponer bloques de PHP dispersos dentro de la página.
      Otro concepto importante es como enviar el mail del primer formulario a la tercer página, esto se logra con los 
      controles de tipo "hidden", este tipo de control no se visualiza en el formulario pero se envía al presionar el
       botón submit.-->
      <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe alumno con dicho mail $_REQUEST[email]";
  ?>
</body>
</html>