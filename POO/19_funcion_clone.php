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
  public function __clone()
  // El método __clone se ejecutará cuando llamemos al operador clone para esta clase:
  // Es decir cuando realicemos la asignación:
  {
    $this->edad=0;
    $this->nombre="";
  }
}

// Si queremos que una clase no pueda clonarse simplemente podemos implementar el siguiente código en el método __clone():

//   public function __clone()
//   {
//     die('No esta permitido clonar objetos de esta clase');
//   }

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',20);
echo 'Datos de $persona1:';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
$persona2=clone($persona1);
$persona2->fijarNombreEdad('Wilson', 34);
echo 'Datos de $persona2:';
echo $persona2->retornarNombre().' - '.$persona2->retornarEdad().'<br>';
?>
</body>
</html>