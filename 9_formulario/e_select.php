<html>

<head>
  <title>impuestos</title>
</head>

<body>
  <?php
  if ($_REQUEST['impuestos'] != "3") {
    echo  $_REQUEST['nombre']. " usted no debe pagar impuestos";
  } else {
    echo  $_REQUEST['nombre']. " usted debe pagar impuestos";
  }
  ?>
</body>

</html>