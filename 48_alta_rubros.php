  <?php
  
// archivo conexion base de datos
      require_once("conexion.php");
//-------------------------------
  if ($conexion->connect_error)
    die('Problemas con la conexion a la base de datos');

  $conexion->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
    die($mysql->error);

  // $rubro = new rubros('.$_REQUEST[descripcion].');
  // $rubro->insertarRubros();
  

  $conexion->close();

  echo 'El nuevo rubro se almacenó';
  ?>
  <br>