<?php 


require_once '32_v_poo.php';

class Docente extends Persona{

    public $sueldo;

}

$doc =  new Docente();
$doc->apellido = "carmona luna";
$doc->nombre = "manuel antonio";
$doc->sueldo = 750;

echo $doc->apellido. " gana ". $doc->sueldo. " Dolares <br/>";


?>