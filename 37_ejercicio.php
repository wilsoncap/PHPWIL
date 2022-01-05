<?php 
session_start();
// Cuando creamos o accedemos al contenido de variables de sesión debemos llamar a la función session_start() antes de 
// cualquier salida de etiquetas HTML.
$_SESSION['usuario'] = $_REQUEST['campousuario'];
$_SESSION['clave'] = $_REQUEST['campoclave'];

$conexion = mysqli_connect("db4free.net", "wilsonpru270921", "wili@159", "prueba270921") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select clave, nombre_usuario
                        from usuarios where nombre_usuario='$_SESSION[usuario]'") or
    die("Problemas en el select:" . mysqli_error($conexion));


    if ($reg = mysqli_fetch_array($registros)) {
    // aunque sea un solo registro. En caso de retornar un vector asociativo la condición del if se verifica como 
    // verdadera y pasa a mostrar los datos, en caso de retornar false se ejecuta el else.
    // echo "Nombre:" . $reg['clave'] . "<br>";
    // echo "Curso:" . $reg['nombre_usuario'] . "<br>";

    
    header("Location: http://localhost:8080/PHPWIL/37_ejercicio2.php");

  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);

?>