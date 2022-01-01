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
  function retornarpromedio($valor1, $valor2)
  {
    $pro = $valor1 / $valor2;
    return $pro;
  }

  $v1 = 100;
  $v2 = 50;
  $p = retornarpromedio($v1, $v2);// guardo el una variable lo que me retorna la funcion
  echo "<h2> el promedio es =  $p </h2>" ;
// Si queremos que retorne más de un dato debemos emplear parámetros por referencia.
  function cuadradocubo($valor, &$cuad, &$cub)// ---&$cuad¡¡¡¡¡¡¡
  // creamos dos parametros o varibles dentro de la funcion los cuales guardamos el 
  // calculo de la 1 variable, Es decir, cuando le antecedemos el carácter ampersand al 
  // parámetro, es por referencia.

  // El objetivo es asignarle cierto valor al parámetro y posteriormente el dato quedará 
  // almacenado en la variable que le pasamos a la función.
  {
    $cuad = $valor * $valor;
    $cub = $valor * $valor * $valor;
  }
  cuadradocubo(2, $c1, $c2);
  echo "El cuadrado de 2 es:" . $c1 . "<br>";
  echo "El cubo de 2 es:" . $c2;
  // El parámetro $cuad se almacena en la variable $c1 y el parámetro $cub se almacena en $c2. 
  // Es la forma más adecuada de modificar variables dentro de una función.

  ?>
</body>
</html>