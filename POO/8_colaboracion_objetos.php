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
  // Veremos que hay dos formas de relacionar las clases. La primera y la que nos concentramos en este concepto es la de 
  // COLABORACION.

  class Cabecera {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h1 style="text-align:center">'.$this->titulo.'</h1>';
  }
}

class Cuerpo {
  private $lineas=array();
  public function insertarParrafo($li)// metodo para cargar el atributo $lineas que es un vector
  {
    $this->lineas[]=$li;
  }
  public function graficar()
  {
    for($f=0;$f<count($this->lineas);$f++)
    {
      echo '<p>'.$this->lineas[$f].'</p>';
    }
  }
}
// las instancias de objetos de clase que se le pasan parametros son aquellas donde se declara el constructor
class Pie {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h4 style="text-align:left">'.$this->titulo.'</h4>';
  }
}

class Pagina {
  private $cabecera;
  private $cuerpo;
  private $pie;
  public function __construct($texto1,$texto2)
  {
    $this->cabecera=new Cabecera($texto1);// carga el atributo titulo de la clase cabecera
    $this->cuerpo=new Cuerpo();
    $this->pie=new Pie($texto2);// carga el atributo titulo de la clase pie
  }
  public function insertarCuerpo($texto)// metodo independiente
  {
    $this->cuerpo->insertarParrafo($texto);// el cual recibe colaboracion de la clase Cuerpo con el metdodo insertarParrafo
  }
  public function graficar()// metdodo propio de la clase que recibe colaboracion de todas las clases instanciadas
  {
    $this->cabecera->graficar();
    $this->cuerpo->graficar();
    $this->pie->graficar();
  }
}

$pagina1=new Pagina('Título de la Página','Pie de la página');// llamo a los metodos propios de la clase Pagina
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 1'); // estos metodos son de las
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 2');// otras clases los cuales,los
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 4');// cuales estan colaborando con
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 5');// la clase Pagina
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 6');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 7');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 8');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 9');
$pagina1->graficar();
  ?>

</body>
</html>