<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vector asociativo</title>
</head>
<body>
  <?php 
   //  El vector $_REQUEST que crea PHP en forma automática, cuando accedamos a datos de una base de datos también lo emplearemos etc.)
  //------1 forma
      // $registro['dni'] = "20456322";
      // $registro['nombre'] = "Martinez Pablo";
      // $registro['direccion'] = "Colon 134";
      // echo $registro['nombre'];

  // --2 forma
      // $registro = array(
      //   'dni' => '20456322',
      //   'nombre' => 'Martinez Pablo',
      //   'direccion' => 'Colon 134'
      // );
      // echo $registro['dni'];

  //--------------------

    $articulo = array(
    'codigo' => 1,
    'descripcion' => 'manzanas',
    'precio' => 30.25
    );
    // En cada repetición del 'foreach' la variable $clave almacena el subíndice del vector 
    // y la variable $valor contiene el valor de la componente del vector

    foreach ($articulo as $clave => $valor) {//Cuando tenemos que recorrer en forma completa un vector asociativo en PHP podemos utilizar la estructura 'foreach'
      echo 'Para la clave :' . $clave . " almacena el valor: " . $valor;
      echo "<br>";
    } 

  ?>

</body>
</html>