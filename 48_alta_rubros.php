  <?php
  
// archivo conexion base de datos
      // require_once("conexion.php");
//-------------------------------

$conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($conexion->connect_error)
    die('Problemas con la conexion a la base de datos');

  $conexion->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
    die($conexion->error);

  // $rubro = new rubros('.$_REQUEST[descripcion].');
  // $rubro->insertarRubros();
  

  $conexion->close();

  echo 'El nuevo rubro se almacenó';
  echo "<a href='49_listado_rubros.php' >Rubros de</a>"
  ?>
  <br>