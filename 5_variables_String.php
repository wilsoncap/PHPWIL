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
//Para concatenar string empleamos el operador . (punto)


//Cuando una cadena encerrada entre comillas dobles contiene una variable en 
// su interior, ésta se trata como tal, por lo tanto se utilizará su contenido para el 
//almacenamiento:
$dia=10;
$fecha="Hoy es $dia";//
echo $fecha;
//Una cadena se puede definir con las comillas simples (pero es importante tener en cuenta 
//que no se sustituyen las variables si empleamos comillas simples):



echo "<br>";
  $cadena1 = "diego";
  $cadena2 = "juan";
  $cadena3 = "ana";
  $todo = $cadena1 . $cadena2 . $cadena3 . "<br>";
  echo $todo;
  $edad1 = 24;
  echo $cadena1 . " tiene $edad1 de edad";

  echo "<br>";
  $precio=90;
  echo "La computadora tiene un precio de $precio";
?>

</body>
</html>