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
abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function retornarSueldo()
  {
    return $this->sueldo;
  }
} 

class Empleado extends Trabajador {
}

class Gerente extends Trabajador {
}

$vec[]=new Empleado('juan',1200);
$vec[]=new Empleado('ana',1000);
$vec[]=new Empleado('carlos',1000);

$vec[]=new Gerente('jorge',25000);
$vec[]=new Gerente('marcos',8000);
$suma1=0;
$suma2=0;
for($f=0;$f<count($vec);$f++)
{
  if ($vec[$f] instanceof Empleado)
  //Mediante el operador instanceof preguntamos por cada elemento del vector y verificamos si se trata de una instancia de la clase Empleado o de la clase Gerente.
    $suma1=$suma1+$vec[$f]->retornarSueldo();
  else
    if ($vec[$f] instanceof Gerente)
      $suma2=$suma2+$vec[$f]->retornarSueldo();
}
echo 'Gastos en sueldos de Empleados:'.$suma1.'<br>';
echo 'Gastos en sueldos de Gerentes:'.$suma2.'<br>';

?>
</body>
</html>