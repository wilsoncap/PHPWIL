<?php 

require_once '36_v_relacion_clases.php';// aca esta la clase pais la cual la estoy relacionando con la clase ciudad

class Ciudad{

  public $nombre;
  public $abreviatura;
  public $numeroHabitates;
  public $pais;

  function __construct($nom, $abre, $numH, $pai){
    $this->nombre = $nom;
    $this->abreviatura = $abre;
    $this->numeroHabitates = $numH;
    $this->pais = $pai;

  }


}

$pai1  = new Pais("Colombia", "Petrosqui");//para cargar el objeto en la clase ciudad, primero cargamos el objeto pais para luego pasarlo a la clase ciudad

$ciu1 = new Ciudad("Tunjuelito", "Tunj", 5000, $pai1);// el cuarto parametro de la clase ciudad llamo al objeto pais
echo "nombre de la ciudad: ". $ciu1->nombre . "<br/>";
echo "pais al que pertenece: ". $ciu1->pais->nombre . "<br/>";// para acceder al nombre del objeto pais, primero ::clasetransaccional->clasebusqueda->propiedad
echo "Presidente de la ciudad al que pertenece el pais: ". $ciu1->pais->presidente . "<br/>";


?>