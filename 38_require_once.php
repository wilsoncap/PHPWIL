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
    //  Es importante el lugar donde llamamos a la sentencia require_once, debe ser siempre antes de la llamada a las 
    // funciones que contiene la librería.
  require_once("38_require_once2.php");
  //Para incluir el contenido de otro archivo, debemos utilizar la sentencia require_once pasando como parámetro el 
  // archivo a incluir:
  cabeceraPagina("Titulo principal de la página");
  // El programa continúa llamando a una función que no se encuentra implementada en este archivo sino que está en el que llamamamos
  
  echo "<br><br><center>Este es el cuerpo de la página<br><br></center>";
  piePagina("Pie de la página");
  ?>
</body>
</html>