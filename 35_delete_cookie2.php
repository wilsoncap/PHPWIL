<?php
if ($_REQUEST['opcion'] == "recordar")
  setcookie("mail", $_REQUEST['mailusuario'], time() + (60 * 60 * 24 * 365), "/");
elseif ($_REQUEST['opcion'] == "norecordar")
  setcookie("mail", "", time() - 1000, "/");
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if ($_REQUEST['opcion'] == "recordar")
    echo "cookie creada";
  elseif ($_REQUEST['opcion'] == "norecordar")
    echo "cookie eliminada";
    // En caso que esté seleccionado el segundo radio, creamos la misma cookie pero con una fecha de caducidad inferior 
    // a la actual (con esto estamos virtualmente eliminando la cookie):
  ?>
  <br>
  <a href="35_delete_cookie.php">Ir a la otra página</a>
</body>

</html>