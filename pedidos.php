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
  // En primer lugar creamos o abrimos el archivo de texto "datos.txt". El segundo parámetro de la función fopen indica 
  // la forma de apertura de archivo "a" (lo crea o si ya existe el archivo lo abre para añadir datos al final), 
  // "w" (crea el archivo de texto, si existe borra su contenido) y la última forma de apertura del archivo es 
  // "r" (abre el archivo para su lectura)
  $ar = fopen("pedidos.txt", "a") or
    die("Problemas en la creacion");
    //Si el archivo no se puede abrir, se ejecuta la instrucción que se encuentra luego del operador "or" en nuestro caso 
    // llamamos a la función die que finaliza la ejecución del programa PHP mostrando como mensaje el texto que le pasamos 
    // a dicha función (por ejemplo si el disco duro del servidor está lleno no se podrá crear el archivo de texto)
  fputs($ar, $_REQUEST['nombre']);
  fputs($ar, "\n");
  fputs($ar, $_REQUEST['direccion']);
  fputs($ar, "\n");
  fputs($ar, $_REQUEST['pizza']);
  fputs($ar, "\n");
  fputs($ar, $_REQUEST['cantidad']);
  fputs($ar, "\n");
  fputs($ar, "--------------------------------------------------------");
  // Para la grabación de datos utilizamos la función fputs que tiene dos parámetros: la referencia al archivo donde 
  // grabamos y el string a grabar.
  fputs($ar, "\n");
  // Para el salto de línea en el archivo de texto, usamos los caracteres \n.De esta forma cuando leamos el archivo de 
  // texto lo haremos línea a línea.
  fclose($ar);// Cuando dejamos de trabajar con el archivo llamamos a la función fclose.
  echo "Los datos se cargaron correctamente.";
  ?>
</body>
</html>