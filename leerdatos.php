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
  $ar = fopen("datos.txt", "r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar)) {// !mientras no se llegue al final del archivo
    // La función feof retorna true si se ha llegado al final del archivo en caso contrario retorna false. Para que se 
    // impriman todas las líneas del archivo se plantea una estructura repetitiva que se ejecuta mientras no se llegue al 
    // final de archivo (el operador lógico not en PHP es el caracter !):
    $linea = fgets($ar);//Dentro de la estructura repetitiva leemos una línea completa del archivo de texto con la función fgets:
    $lineasalto = nl2br($linea);
    //Como el navegador no hace un salto de línea con este caracter, debemos convertir dicho caracter al elemento <br> 
    // propia de HTML. La función que realiza esta actividad se llama nl2br (new line to br)
    echo $lineasalto;
  }
  fclose($ar);
  ?>
</body>
</html>