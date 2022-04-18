<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>

<?php

$num1 = 1000;
$num2 = 200;
$num3 = 30;


if($num1>$num2 && $num1>$num3){
  echo 'El mayo es '.$num1;
}elseif($num2>$num3){
  echo 'El mayo es '.$num2;
}else{
  echo 'El mayo es '.$num3;
}

?>

  </body>
</html>
