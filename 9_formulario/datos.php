<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  // funsion isset() Su uso más común es cuando queremos comprobar si estamos entrando por primera vez a una 
  //página con un formulario o estamos entrando porque se presionó el botón de SUBMIT y hay que verificar si los 
  // campos han sido rellenados correctamente, Comprobar si llegaron los campos requeridos:
  if (isset($_REQUEST['check1'])) {// si se lleno el campo check1
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];// recupere los dos datos, haga la operacion y guardelos en la variable
    echo "La suma es:" . $suma . "<br>";
  }
  if (isset($_REQUEST['check2'])) {// si se lleno el campo check2
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];// recupere los dos datos, haga la operacion y guardelos en la variable
    echo "La resta es:" . $resta;
  }
  ?>
</body>

</html>