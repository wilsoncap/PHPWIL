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
class Opcion {
  private $titulo;
  private $enlace;
  private $colorFondo;
  public function __construct($tit,$enl,$cfon)
  {
    $this->titulo=$tit;
    $this->enlace=$enl;
    $this->colorFondo=$cfon;
  }
  public function graficar()
  {
    echo '<a style="background-color:'.$this->colorFondo.
         '" href="'.$this->enlace.'">'.$this->titulo.'</a>';
  }
}

class Menu {
  private $opciones=array();
  private $direccion;
  //metodos publicos
  public function __construct($dir)
  {
    $this->direccion=$dir;
  }
  public function insertar($op)
  {
    $this->opciones[]=$op;
  }
  //metodos privados
  private function graficarHorizontal()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
    }
  }
  private function graficarVertical()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
      echo '<br>';
    }
  }
  // metodo publico
  public function graficar()
  {
    //analiza la opcion del menu y con base en eso grafica el menu en vertical u horizontal
    if (strtolower($this->direccion)=="horizontal")
      $this->graficarHorizontal();
    else
      if (strtolower($this->direccion)=="vertical")
        $this->graficarVertical();
  }
}

$menu1=new Menu('horizontal');// me inicializa el atributo direccion de menu de la clase Menu
$opcion1=new Opcion('Google','http://www.google.com','#C3D9FF');// inicializa los atributos de la clase opcion
$menu1->insertar($opcion1);// carga los parametros del metdodo insertar al atributo opciones de cla clase menu
$opcion2=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
$menu1->insertar($opcion2);
$opcion3=new Opcion('MSN','http://www.msn.com','#C3D9FF');
$menu1->insertar($opcion3);
$menu1->graficar();
?>
</body>
</html>