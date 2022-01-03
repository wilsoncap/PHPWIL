<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>paginacion</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "db_php") or
    die("Problemas con la conexión");
  $inicio = 0;
  $registros = mysqli_query($conexion, "select alu.codigo as  
                                               codigo,
                                               nombre,
                                               email,
                                               codigocurso, 
                                               nombrecurso 
		                                      from alumnos as alu
                                          inner join cursos as cur on cur.codigo=alu.codigocurso
                                          limit $inicio,2") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['email'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - 2;
    echo "<a href=\"32_paginacion.php?pos=$anterior\">Anteriores </a>";
  }if ($impresos == 2) {
    $proximo = $inicio + 2;
    echo "<a href=\"32_paginacion.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);
  ?>
</body>
</html>