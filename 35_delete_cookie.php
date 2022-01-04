<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="35_delete_cookie2.php" method="post">
    Ingrese su mail:
    <input type="text" name="mailusuario" value="<?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail']; ?>">
    <!--Es decir, disponemos un control text y como valor de la misma verificamos si el cliente tiene ya una cookie 
    guardada en su máquina, en caso afirmativo la mostramos dentro del text modificando la propiedad value.-->
    <br>
    <input type="radio" name="opcion" value="recordar">
    Recordar en esta computadora el mail ingresado.
    <br>
    <input type="radio" name="opcion" value="norecordar">
    No recordar.
    <br>
    <input type="submit" value="confirmar">
  </form>
  <!--Ejercio 35 pendiente por desarrollar-->
</body>
</html>