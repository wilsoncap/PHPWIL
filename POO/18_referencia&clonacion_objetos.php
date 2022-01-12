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
class Persona {
  private $nombre;
  private $edad;
  public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return $this->edad;
  }
}
echo "creo el objeto normalmente-------------------- e inicializo las variables";
echo "<br>";
$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',20);/// solo estoy inicializando las variables
// aca referencie el objeto en la varible x
$x=$persona1;
echo " en este punto ya cree una refererencia del objeto que guarde en la variable X";
echo "<br>";
echo 'Datos de la persona ($persona1):';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
echo 'Datos de la persona ($x):';
echo $x->retornarNombre().' - '.$x->retornarEdad().'<br>';
// aca estoy inicializando las varibles desde la referencia X que apunta hacia el objeto
echo " x->fijarNombreEdad('Ana',25)------------ ahora la variable X y persona1 tienen el mismo dato ";
echo "<br>";
$x->fijarNombreEdad('Ana',25);
echo 'Después de modificar los datos<br>';
echo 'Datos de la persona ($persona1):';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
echo 'Datos de la persona ($x):';
echo $x->retornarNombre().' - '.$x->retornarEdad().'<br>';
echo " persona2=clone(persona1)------------ ahora estoy clonando la variable persona1 en la variable Persona2 ";
echo "<br>";
$persona2=clone($persona1);// aunque clone el objeto, ya este tenia unos datos guardados
$persona1->fijarNombreEdad('Luis',50);// nuevamente llamo al metodo de la variable persona 1 para inicializar las varibles
echo 'Después de modificar los datos de persona1<br>';
echo 'Datos de la persona ($persona1):';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';// se muestran esas variables que acabe de inicializar
echo 'Datos de la persona ($persona2):';
echo $persona2->retornarNombre().' - '.$persona2->retornarEdad().'<br>';// se muestran las variables que tenia guardadas en persona1 antes de clonar 
// Hay que diferenciar bien que el operador de asignación "=" no crea un nuevo objeto sino una nueva referencia a dicho 
// objeto. Si queremos crear un nuevo objeto idéntico a uno ya existente debemos emplear el operador clone.
?>
</body>
</html>