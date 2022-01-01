<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registrar alumno</title>
</head>
<body>
    <?php
    //---mysqli_connect(servidor, usuario, password, nombreDB)
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or //funcion para establecer la conexion
    die("Problemas con la conexión");// si la conexion retorna falso then la función die que detiene la ejecución del programa y muestra el mensaje por pantalla.

//---mysqli_query(conexion, sententciaSQL)
  mysqli_query($conexion, "insert into alumnos(nombre,email,codigocurso) values 
              ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")// En caso que MySql detecte un error, retorna false la función mysqli_query, por lo que se ejecuta la instrucción posterior al or
    or die("Problemas en el select" . mysqli_error($conexion));
// Los campos de tipo varchar SQL requiere que encerremos entre comillas simples, esto 
// sucede para el nombre y el mail; en cambio, para el codigocurso esto no debe ser así

  mysqli_close($conexion);

  echo "<h2> El alumno $_REQUEST[nombre] fue registrado exitosamente </h2>";
  ?>
</body>
</html>