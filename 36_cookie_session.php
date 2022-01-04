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
  if (isset($_COOKIE['usu']))
    echo "Cookie de sesión creada. Su valor es $_COOKIE[usu]";
  else
    echo "No existe cookie de sesión";
  ?>
  <br>
  <a href="36_cookie_session2.php">Crear cookie de sesión</a>
  <!--pendiente ejercicio 36-->
</body>
</html>