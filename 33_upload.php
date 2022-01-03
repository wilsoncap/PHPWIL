<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir datos al servidor</title>
</head>
<body>
    <?php
    // Cuando se ejecuta esta página, ya está almacenado en el servidor el archivo, en una carpeta temporal. Ahora nos 
    // hace falta copiar el mismo a la carpeta donde se encuentra nuestra página (en definitiva nuestro sitio de internet). 
    // Para esto llamamos a la función copy:
  copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
  // La matriz $_FILES almacena el nombre del archivo guardado en el directorio temporal ($_FILES['foto']['tmp_name']) y 
  //el nombre del archivo originario ($_FILES['foto']['name'])
  echo "La foto se registro en el servidor.<br>";
  $nom = $_FILES['foto']['name'];
  // Por último mostramos en la página el archivo de la imagen que se almacenó en el servidor
  echo "<img src=\"$nom\">";

//   Otras cosas interesantes que tiene la matriz $_FILES:

// $_FILES['foto']['name'] El nombre original del fichero en 
//                         la máquina cliente.
// $_FILES['foto']['type'] El tipo de archivo (si el navegador
//                         lo proporciona). Un ejemplo podría ser "image/gif".
// $_FILES['foto']['size'] El tamaño en bytes del fichero recibido.
// $_FILES['foto']['tmp_name'] El nombre del archivo temporal que se 
//                             utiliza para almacenar en el servidor el archivo recibido.
  ?>
</body>
</html>