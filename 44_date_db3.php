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
  // archivo conexion base de datos
      require_once("conexion.php");
  //-------------------------------

  $registros = mysqli_query($conexion, "select alu.codigo as codigo,
                                        nombre,
                                        email,
                                        codigocurso,
                                        fechanac, 
                                        nombrecurso from alumnos as alu
                                        inner join cursos as cur on cur.codigo=alu.codigocurso") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['email'] . "<br>";
    echo "Fecha de Nacimiento:" . $reg['fechanac'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }
  mysqli_close($conexion);
  ?>
</body>
</html>