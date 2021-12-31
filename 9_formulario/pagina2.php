<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recepcion de datos</title>
  </head>
  <body>
    <?php

      // Cuando se envía un formulario, PHP almacena la información recibida en una matriz llamada $_REQUEST. El número 
      // de valores recibidos y los valores recibidos dependen tanto del formulario como de la acción del usuario. 
      // Cualquier control se envía solamente si está establecido su atributo name

      echo "El nombre ingresado es:";
      echo $_REQUEST['nombre'];

      //Para acceder al dato en PHP se cuenta con un vector llamado $_REQUEST indicando 
      //como subíndice el nombre del cuadro de texto que definimos en el formulario 
      //(dicho nombre es sensible a mayúsculas y minúsculas) Es común indicar entre 
      //comillas simples el subíndice en lugar de comillas dobles 
      //(con comillas dobles también funciona)


      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      //---------------------------------
    if ($_REQUEST['radio1'] == "suma") {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es:" . $suma;
    } elseif ($_REQUEST['radio1'] == "resta") {
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es:" . $resta;
    }
  


  ?>
  </body>
</html>
