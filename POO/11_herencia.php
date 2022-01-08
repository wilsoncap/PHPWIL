<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>herencia</title>
</head>
<body>
  <?php
///----------CLASE OPERACION
class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar1($v)
  {
    $this->valor1=$v;
  }
  public function cargar2($v)
  {
    $this->valor2=$v;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

// El método operar puede acceder a los atributos heredados (siempre y cuando los mismos se declaren protected, en caso 
// que sean private si bien lo hereda de la clase padre solo los pueden modificar métodos de dicha clase padre.
class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1(10);// llama al metodo de la clase padre
$suma->cargar2(10);// llama al metodo de la clase padre
$suma->operar();// llama a su metodo propio para hacer el calculo y asignarselo al atributo de la Clase padre
echo 'El resultado de la suma de 10+10 es:';
$suma->imprimirResultado();// imprime el valor del atributo resultado

$resta=new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo 'El resultado de la diferencia de 10-5 es:';
$resta->imprimirResultado();

?>
</body>
</html>