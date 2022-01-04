<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<!--Lo más importante es el bloque PHP que verifica si ya existe la cookie en el navegador del cliente.-->
<body <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
<!--El vector asociativo $_COOKIE almacena todas las cookies creadas por el visitante. Si es la primera vez que 
peticionamos esta página, el vector $_COOKIE no tendrá elementos. Es decir que la marca body no tiene inicializada la propiedad style.-->
  <form action="34_creacion_lectura_cookie2.php" method="post">
    Seleccione de que color desea que sea la página de ahora en más:<br>
    <input type="radio" value="rojo" name="radio">Rojo<br>
    <input type="radio" value="verde" name="radio">Verde<br>
    <input type="radio" value="azul" name="radio">Azul<br>
    <input type="submit" value="Crear cookie">
  </form>
  <!---->
</body>
</html>