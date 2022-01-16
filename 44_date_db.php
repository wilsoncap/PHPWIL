<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="44_date_db2.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="email"><br>
    Ingrese la fecha de nacimiento (dd/mm/aaaa):
    <input type="text" name="dia" size="2">
    <input type="text" name="mes" size="2">
    <input type="text" name="anio" size="4">
    <br>
    Seleccione el curso:
    <select name="codigocurso">
      <?php
      // archivo conexion base de datos
      require_once("conexion.php");
      //-------------------------------
      // $cursos = new cursos();
      // $allcursos = $cursos->mostrarCursos();
      // $saludo = $cursos->saludar();

      while ($reg = mysqli_fetch_array($s_cursos)) {
        echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
      }
      echo "$saludo";
      ?>
    </select>
    <br>
    <input type="submit" value="Registrar">
  </form>
</body>
</html>