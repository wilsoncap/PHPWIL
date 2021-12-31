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
  // == para ver si una variable es igual a otra.
  // != distinto.
  // >= mayor o igual.
  // > mayor.
  // <= menor o igual 
  // < menor 
  
  $valor = rand(1, 10);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 5) {
    echo "Es menor o igual a 5";
  } else {
    echo "Es mayor a 5";
  }


  //--------ejercicio
  echo "<br>";
  $valor = rand(1, 1000);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 9) {
    echo "Tiene un dígito";

  } elseif ($valor < 100) {
      echo "Tiene 2 dígitos";

  } else {
      echo "Tiene 3 dígitos";
  }
  
  
  ?>
</body>
</html>