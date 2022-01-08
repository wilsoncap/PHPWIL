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
class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;
  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }
  // Un método privado (private) solo puede ser llamado desde otro método de la clase. No podemos llamar a un método 
  // privados desde donde definimos un objeto.
  public function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }

  private function inicioFila()
  {
    echo '<tr>';
  }
  
  private function mostrar($fi,$co)
  {
    echo '<td>'.$this->mat[$fi][$co].'</td>';
  }

  private function finFila()
  {
    echo '</tr>';
  }
  // Con la definición de métodos privados se elimina la posibilidad de llamar a métodos por error, consideremos el 
  // problema del concepto anterior (clase Tabla) donde creamos un objeto de dicha clase y llamamos por error al método 
  // finTabla:
  private function finTabla()
  {
    echo '</table>';
  }
  // Los métodos públicos es aquello que queremos que conozcan perfectamente las personas que hagan uso de nuestra clase 
  // (también llamada interfaz de la clase)
  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      } 
      $this->finFila();
    }
    $this->finTabla();
  }
}
/// Tengamos en cuenta que cuando definimos un objeto de la clase Tabla solo podemos llamar a los métodos públicos. Cuando
// documentamos una clase debemos hacer mucho énfasis en la descripción de los métodos públicos, que serán en definitiva 
// los que deben llamarse cuando definamos objetos de dicha clase.
$tabla1=new Tabla(2,3);
$tabla1->cargar(1,1,"1");
$tabla1->cargar(1,2,"2");
$tabla1->cargar(1,3,"3");
$tabla1->cargar(2,1,"4");
$tabla1->cargar(2,2,"5");
$tabla1->cargar(2,3,"6");
$tabla1->graficar();
// El encapsulamiento es una técnica por el que se ocultan las características internas de una clase de todos aquellos 
// elementos (atributos y métodos) que no tienen porque conocerla otros objetos. Gracias al modificador private podemos ocultar las características internas de nuestra clase.
?>
</body>
</html>