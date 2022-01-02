<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recupera datos</title>
</head>
<body>
  
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombre,email,codigocurso
                        from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));
// mysqli_fetch_array. Esta función retorna un vector asociativo(similar clave: => $varible) con los datos del registro 
// rescatado, o false en caso de no haber más registros. Es decir que si retorna un registro se almacena en el vector $reg y la condición del while se 
// valida como verdadero y pasa a ejecutarse el bloque del while
  while ($reg = mysqli_fetch_array($registros)) {
    //$reg = revisa si hay registros...y si hay va guardando lo que encuentre de esa matrix(consulta) llamada $registros en 
    // $reg que se vuelve un vertor asociativo $reg['codigo':=>'', 'nombre':=>''...]
    // while($obtener_filas=mysqli_fetch_array($tabla)){
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['email'] . "<br>";
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
    echo "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>
</body>
</html>