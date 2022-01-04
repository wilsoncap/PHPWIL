<?php
// La llamada a la función setcookie debe hacerse antes de imprimir cualquier etiqueta HTML, de lo contrario no 
// funcionará.
if ($_REQUEST['radio'] == "rojo")
  setcookie("color", "#ff0000", time() + 60 * 60 * 60 * 365, "/");
  // La fecha de expiración de la cookie la calculamos fácilmente llamando a la función time() que nos retorna la fecha 
  // actual en segundos y le sumamos el producto 60*60*24*365 (60 segundos * 60 minutos * 24 horas * 365 días) es decir
  //  que la cookie existirá en la máquina del visitante hasta el año próximo.
elseif ($_REQUEST['radio'] == "verde")
  setcookie("color", "#00ff00", time() + 60 * 60 * 60 * 365, "/");
elseif ($_REQUEST['radio'] == "azul")
  setcookie("color", "#0000ff", time() + 60 * 60 * 60 * 365, "/");
  // Cuando indicamos como directorio la sintaxis "/" significa que la cookie se crea a nivel del sitio y con cuaquier 
  // petición a dicho sitio, el navegador enviará la cookie al servidor.
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  Se creó la cookie.
  <br>
  <a href="34_creacion_lectura_cookie.php">Ir a la otra página</a>
</body>

</html>