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
class Menu {
  private $enlaces=array();
  private $titulos=array();
  // Lo más conveniente es que los atributos sean privados para que solo los métodos de la clase puedan modificarlos.
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
    // Utilizamos la característica de PHP que un vector puede ir creciendo solo con asignarle el nuevo valor. El dato 
    // después de esta asignación $this->enlaces[]=$en; se almacena al final del vector
  }
  public function mostrar()
  {
    for($f=0;$f<count($this->enlaces);$f++)// Para obtener la cantidad de elementos del vector utilizamos la función count.
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      // Hay que acostumbrarse que cuando accedemos a los atributos de la clase se le antecede el operador $this-> y 
      // seguidamente el nombre del atributo propiamente dicho.
      echo "-";
    }
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yhahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrar();
?>
</body>
</html>