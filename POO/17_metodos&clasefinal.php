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

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function __construct($v1,$v2)
  {
    $this->valor1=$v1;
    $this->valor2=$v2;
  }
  public final function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}
// Si a un método le agregamos el modificador final significa que ninguna subclase puede sobreescribirlo. Este mismo 
// modificador se lo puede aplicar a una clase, con esto estaríamos indicando que dicha clase no se puede heredar.
final class Suma extends Operacion{ 
  // Agregando el modificador final previo a la declaración de la clase estamos indicando que dicha clase no se podrá heredar.
  private $titulo;
  public function __construct($v1,$v2,$tit)
  {
    Operacion::__construct($v1,$v2);// llama al contructor de la clase padre
    $this->titulo=$tit;
  }
  public function operar()
  {
    echo $this->titulo;
    echo $this->valor1.'+'.$this->valor2.' es ';
    $this->resultado=$this->valor1+$this->valor2;
  }
}

$suma=new Suma(10,10,'Suma de valores:');
$suma->operar();
$suma->imprimirResultado();
?>
</body>
</html>