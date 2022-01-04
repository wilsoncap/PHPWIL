<?php
session_start();
// Cuando creamos o accedemos al contenido de variables de sesión debemos llamar a la función session_start() antes de 
// cualquier salida de etiquetas HTML.
$_SESSION['usuario'] = $_REQUEST['campousuario'];
$_SESSION['clave'] = $_REQUEST['campoclave'];
//Es decir, tenemos el vector asociativo $_SESSION que almacena las variables de sesión.
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
    Se almacenaron dos variables de sesión.<br><br>
  <a href="37_variable_session2.php">Ir a la tercer página donde se recuperarán
    las variables de sesión</a>
</body>
</html>