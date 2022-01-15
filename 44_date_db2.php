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
  $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
  mysqli_query($conexion, "insert into alumnos(nombre, email, fechanac, codigocurso) values 
           ('$_REQUEST[nombre]',
           '$_REQUEST[email]',
           '$fechanacimiento',
            $_REQUEST[codigocurso])") or
            die("Problemas en el insert alumnos" . mysqli_error($conexion));
  
  echo "El alumno fue dado de alta.";
  ?>
  <br>
  <a href="44_date_db3.php">ver listado de alumnos</a
</body>
</html>