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
  
  for ($f = 1; $f <= 10; $f++) {
    echo "<h3>$f</h3>";
    
  }

  echo "<br>";
  //La condición del while se verifica antes de ingresar al bloque a repetir. Si la 
  //misma se verifica falsa la primera vez no se ejecutará el bloque.
  $valor = rand(1, 10);
  $inicio = 1;
  while ($inicio <= $valor) {
    echo $inicio;
    echo "<br>";
    $inicio++;// el incremento de la varible se hace al finalizar la iteracion
  }


  ?>

</body>
</html>