<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>vectores tradicionales</title>
  </head>
  <body>
     <?php
     // $edades=array("menores","jovenes","adultos"); Otra forma de inicializar un vector es definirlo e inicializarlo simultáneamente
  $nombres[] = "juan";
  $nombres[] = "pedro";
  $nombres[] = "ana";
  for ($f = 0; $f < count($nombres); $f++) {
    
    echo "<h2> $nombres[$f] </h2>";
  }
// En cada iteracion del 'foreach' la variable $nombre almacena una componente del vector $nombres, luego dentro del 
// 'foreach' mostramos el contenido de la variable $nombre:
  foreach ($nombres as $nombre) {// me vas a recorrer el vector nombres como iteraciones nombre
    echo $nombre;
    echo "<br>";
  }
  //Cuando tenemos que recorrer en forma completa un vector en PHP es muy común utilizar la estructura 'foreach'

  $diasemana=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
  foreach($diasemana as $dia){
    if($dia == "lunes" or $dia == "domingo"){
      echo $dia;
      echo "<br>";
    }else{
      echo "dia no disponible";
      echo "<br>";
    }

  }
  
  ?>

  </body>
</html>
