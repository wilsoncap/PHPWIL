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
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorFuente;
  private $colorFondo;
  public function __construct($tit,$ubi='center',$colorFuen='#ffffff',$colorFon='#000000')
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorFuente=$colorFuen;
    $this->colorFondo=$colorFon;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:';
    echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

// Veamos cuales son las restricciones que debemos tener en cuenta cuando utilizamos parámetros opcionales:

// * No podemos definir un parámetro opcional y seguidamente un parámetro obligatorio. Es decir los parámetros opcionales 
// se deben ubicar a la derecha en la declaración del método.

// * Cuando llamamos al método no podemos alternar indicando algunos valores a los parámetros opcionales y otros no. Es 
// decir que debemos pasar valores a los parámetros opcionales teniendo en cuenta la dirección de izquierda a derecha 
// en cuanto a la ubicación de parámetros. Para que quede más claro no podemos no indicar el parámetro $ubi y sí el 
// parámetro $colorFuen (que se encuentra a la derecha).Es decir debemos planificar muy bien que orden definir los 
// parámetros opcionales para que luego sea cómodo el uso de los mismos.

// Podemos definir parámetros opcionales tanto para el constructor como para cualquier otro método de la clase. Los 
// parámetros opcionales nos permiten desarrollar clases que sean más flexibles en el momento que definimos objetos de 
// las mismas.


$cabecera1=new CabeceraPagina('El blog del programador');
$cabecera1->graficar();
echo '<br>';
$cabecera2=new CabeceraPagina('El blog del programador','left');
$cabecera2->graficar();
echo '<br>';
$cabecera3=new CabeceraPagina('El blog del programador','right','#ff0000');
$cabecera3->graficar();
echo '<br>';
$cabecera4=new CabeceraPagina('El blog del programador','right','#ff0000','#ffff00');
$cabecera4->graficar();
?>
</body>
</html>