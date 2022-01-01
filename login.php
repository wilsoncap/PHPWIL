<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuario</title>
</head>
<body>
  <?php 
  $result = "";
  function login($nom, $c1, $c2){
    if ($c1 == $c2 ){
        $result = $nom." su clave esta OK";
    }else{
        $result = $nom." su Clave no coincide = (";
    }

    return $result;
  }

  $respuesta = login($_REQUEST['nombre'], $_REQUEST['clave1'], $_REQUEST['clave2']);
  echo "<h2> $respuesta </h2>"
  
  ?>
</body>
</html>