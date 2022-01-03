<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>alumnos x curso</title>
</head>
<body>
<h2>Alumnos x curso</h2>

<?php 
 $conexion = mysqli_connect("localhost", "root", "", "db_php") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select alu.codigo as codigo,
                                          nombre,
                                          email,
			                                    codigocurso, 
                                          nombrecurso 
                                     from alumnos as alu
                                     inner join cursos as cur on cur.codigo=alu.codigocurso where cur.codigo = '$_GET[codigo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
    // aunque sea un solo registro. En caso de retornar un vector asociativo la condición del if se verifica como 
    // verdadera y pasa a mostrar los datos, en caso de retornar false se ejecuta el else.
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
  } 

   mysqli_close($conexion);

?>

</body>
</html>