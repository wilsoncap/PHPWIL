<?php 

class Curso{
  
  public $nombre;
  private $docente;

  function mensionarDocente(){ // al no ponerle ningun modificador de acceso lo toma por defecto como publica

    echo "Docente: ". $this->docente;
  }

}

/*
- public -> sera posible utilizar esa propiedad o metodo en todo el script
- private -> sera posible utilizar esa propiedad o metodo solo en la clase que la contiene
- proted -> sera posible utilizar esa propiedad o metodo solo en la clase que la contiene y todos sus descendiente
- final -> No podra ser sobreescrita por sus descendientes
- abstract -> para ser usado, debera heredarse promero

*/

$cur1 = new Curso();
$cur1->nombre = "programacion";
// $cur1->docente = "Alejandro Cardona";

echo $cur1->nombre. " es dictado por ". $cur1->mensionarDocente()."<br>";

?>