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
// Los métodos son como las funciones en los lenguajes estructurados, pero están definidos dentro de una clase y operan 
// sobre los atributos de dicha clase.

/// Los métodos también son llamados las responsabilidades de la clase. Para encontrar las responsabilidades de una clase 
// hay que preguntarse qué puede hacer la clase

class CabeceraPagina {
  private $titulo;
  private $ubicacion;

// Un método tiene un nombre, conviene utilizar verbos para la definición de métodos (mostrar, inicializar, graficar etc.) 
// y sustantivos para la definición de atributos ($color, $enlace, $titulo etc)

  public function inicializar($tit,$ubi)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}
// Un método hasta ahora siempre comienza con la palabra clave public (esto significa que podemos llamarlo desde fuera de 
// la clase, con la única salvedad que hay que definir un objeto de dicha clase)
$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','center');
$cabecera->graficar();
?>
</body>
</html>