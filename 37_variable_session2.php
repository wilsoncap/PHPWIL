<?php
session_start();
// De nuevo vemos que la primera línea de esta página es la llamada a la función session_start() que, entre otras cosas, 
// rescata de un archivo de texto las variables de sesión creadas para ese usuario (recordemos que desde el navegador 
// todas las veces retorna una cookie con la clave que generó PHP la primera vez que llamamos a una página del sitio).
?>
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
  // Tengamos en cuenta que en cualquier otra página del sitio tenemos acceso a las variables de sesión sólo con llamar 
  // inicialmente a la función session_start().
    echo "Nombre de usuario recuperado de la variable de sesión:" . $_SESSION['usuario'];
    echo "<br><br>";
    echo "La clave recuperada de la variable de sesión:" . $_SESSION['clave'];
    ?>
</body>
</html>