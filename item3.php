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

  $dia = date("d");
  if ($dia <= 10 ){
    echo "sitio activo";
  } else {
    echo "sitio fuera de servicio";
  }

  echo "----ejercicio---";
   $num = rand(1,100);
   if ($num <= 50){
     echo $num;
     echo " es menor que 50";
   }else{
      echo $num;
     echo " es mayor que 50";
   }
  
  ?>
</body>
</html>