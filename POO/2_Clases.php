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
  // Los atributos normalmente son privados (private), ya veremos que esto significa que no podemos acceder al mismo 
  // desde fuera de la clase. Luego para definir los métodos se utiliza la misma sintaxis que las funciones del lenguaje 
  // PHP.
  public function inicializar($nom)
  {
    $this->nombre=$nom;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '<br>';
  }
  // Luego para llamar a los métodos debemos anteceder el nombre del objeto el operador -> y por último el nombre del 
  // método. Para poder llamar al método,éste debe ser definido público (con la palabra clave public). En el caso que 
  // tenga parámetros se los enviamos:


  // Lo último a tener en cuenta en cuanto a la sintaxis de este primer problema es que cuando accedemos a los atributos 
  // dentro de los métodos debemos utilizar los operadores $this-> (this y ->):
}

$per1=new Persona();
$per1->inicializar('Juan');
$per1->imprimir();
$per2=new Persona();
$per2->inicializar('Ana');
$per2->imprimir();
?>
</body>
</html>