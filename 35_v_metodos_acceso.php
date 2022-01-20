<?php 

class Colegio{

  public $nombre;
  private $director;

// METODO SET
  public function setDirector($direc){
    $this->director = $direc;
  }

  // METODO GET
  public function getDirector(){
    return $this->director;
  }

}

$col = new Colegio();
$col->nombre = "Comfacor";
$col->setDirector("Epifanio");

echo "nombre del director: ". $col->getDirector(). "<br/>";
?>