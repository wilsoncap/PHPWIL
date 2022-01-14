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
class Cadena {
  public static function largo($cad)
  {
    return strlen($cad);
  }
  public static function mayusculas($cad)
  {
    return strtoupper($cad);
  }
  public static function minusculas($cad)
  {
    return strtolower($cad);
  }
}

// Hay que tener en cuenta que un método estático no puede acceder a los atributos de la clase, ya que un método estático normalmente se lo llama sin crear un objeto de dicha clase:

// echo 'Largo:'.Cadena::largo($c);

$c='Hola';
echo 'Cadena original:'.$c;
echo '<br>';
echo 'Largo:'.Cadena::largo($c);
echo '<br>';
echo 'Toda en mayúsculas:'.Cadena::mayusculas($c);
echo '<br>';
echo 'Toda en minúsculas:'.Cadena::minusculas($c);
//La sintaxis para llamar un método estático como vemos es distinta a la llamada de métodos de un objeto. Indicamos 
//primero el nombre de la clase, luego el operador '::' y por último indicamos en nombre del método estático a llamar.
?>
</body>
</html>