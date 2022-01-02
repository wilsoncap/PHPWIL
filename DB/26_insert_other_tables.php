<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre">
    <br>
    Ingrese mail:
    <input type="text" name="mail">
    <br>
    Seleccione el curso:
    <select name="codigocurso">
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "db_php") or
        die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
        die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {
        echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        // echo "<input type='checkbox' value=\"$reg[codigo]\">$reg[nombrecurso]</input>";
        // Dentro del while generamos todas las opciones que contiene el "select" imprimiendo el campo nombrecurso y 
        // asociando el campo codigo a la propiedad value(que es en definitiva el código que necesitamos rescatar en 
        // la otra página)
      }
      echo "<br>";
      ?>
      </select>
          <?php
      // $conexion = mysqli_connect("localhost", "root", "", "db_php") or
      //   die("Problemas con la conexión");

      // $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
      //   die("Problemas en el select:" . mysqli_error($conexion));
      // while ($reg = mysqli_fetch_array($registros)) {
      //   // echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
      //   echo "<br>";
      //   echo "<input type='checkbox' value=\"$reg[codigo]\">$reg[nombrecurso]</input>";
        
      //   // Dentro del while generamos todas las opciones que contiene el "select" imprimiendo el campo nombrecurso y 
      //   // asociando el campo codigo a la propiedad value(que es en definitiva el código que necesitamos rescatar en 
      //   // la otra página)
      // }
      ?>
    
    <br>
    <input type="submit" value="Registrar">
  </form>
</body>
</html>