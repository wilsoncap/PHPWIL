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
  function mostrartitulo($men)
  {
    // para introducir las dobles comillas dentro de un string debemos anteceder el carácter '\'; para introducir 
    // el carácter '\' debemos escribir dos barras \\.
    echo "<h1 style=\"text-align:center\">";
    echo $men;
    echo "</h1>";
  }

  mostrartitulo("Primer titulo");
  echo "<br>";
  mostrartitulo("Segundo segundo");

  ?>
</body>
</html>