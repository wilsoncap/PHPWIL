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
  if (
    is_numeric($_REQUEST['dia']) &&
    is_numeric($_REQUEST['mes']) &&
    is_numeric($_REQUEST['anio'])
  ) {
    if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['anio']))
      echo "La fecha ingresada es correcta";
    else
      echo "La fecha no es válida";
  } else
    echo "La fecha no es válida";
  ?>
</body>
</html>