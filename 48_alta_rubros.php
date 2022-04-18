  <?php
  
// archivo conexion base de datos
      // require_once("conexion.php");
//-------------------------------

$conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($conexion->connect_error)
    die('Problemas con la conexion a la base de datos');

    $b_producto = $_REQUEST['descripcion'];
    $b_precio = floatval($_REQUEST['precio']);
    $b_categoria = intval($_REQUEST['codigorubro']);

  $conexion->query("CALL pa_insertar_producto('$_REQUEST[descripcion]', $_REQUEST[precio],$_REQUEST[codigorubro])") or
  //   die($conexion->error);

  // $conexion->query("CALL pa_insertar_producto($b_producto, $b_precio, $b_categoria)") or
  //   die($conexion->error);

  // $rubro = new rubros('.$_REQUEST[descripcion].');
  // $rubro->insertarRubros();

  //echo "<h2> el roducto es $b_producto, tiene un costo de $b_precio y esta en la categoria $b_categoria</h2>";
  

  $conexion->close();

  echo 'El nuevo rubro se almacenó <br>';
  echo "<a href='49_listado_rubros.php' >mostra articulos ingresados</a>"
  ?>
  <br>