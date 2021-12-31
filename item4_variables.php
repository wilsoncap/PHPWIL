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
  //Hemos utilizado un comando echo para mostrar los mensajes, otro el contenido de 
  //variables y finalmente otro para imprimir un elemento HTML. Este proceso puede acortarse un poco pero 
  //para que sea más claro inicialmente tomaremos el camino largo de hacer la impresión 
  //de un dato con cada comando echo.

  $dia = 24; //Se declara una variable de tipo integer.
  $sueldo = 758.43; //Se declara una variable de tipo double.
  $nombre = "juan"; //Se declara una variable de tipo string.
  $exite = true; //Se declara una variable boolean.
  echo "Variable entera:";
  echo $dia;
  echo "<br>";
  echo "Variable double:";
  echo $sueldo;
  echo "<br>";
  echo "Variable string:";
  echo $nombre;
  echo "<br>";
  echo "Variable boolean:";
  echo $exite;
  


  ?>
</body>
</html>