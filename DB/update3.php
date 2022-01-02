<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>actualizacion de registro</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "db_php") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update alumnos
                          set email='$_REQUEST[mailnuevo]' 
                        where email='$_REQUEST[mailviejo]'") or // save new email in old email
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El mail $_REQUEST[mailviejo] fue modificado con exito x $_REQUEST[mailnuevo] ";
    ?>
</body>
</html>