<?php 

// es una caaracteristica de la POO que permite reutilizar
// caracteristicas (atributos y propiedades) y/o funcionalidades
// de una clase para evitar repetir codigo
require_once '32_v_poo.php';

class Estudiante extends Persona{

  public $numeroCursos;

}
$est1 = new Estudiante();
$est1->apellido = "Capacho Carmona";
$est1->nombre = "Wilson Orlando";
echo $est1->apellido. ", ". $est1->nombre. "<br/>";
$est1->saludar();
$est1->numeroCursos = 6;
echo "N cursos: ". $est1->numeroCursos;
?>