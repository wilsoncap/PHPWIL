<?php

require_once '40_v_define.php';


// $conex = new mysqli();
$conex = mysqli_connect(SERVIDOR, BASE_DATOS, USUARIO, PASSWORD, PUERTO) or
    die("Problemas con la conexión");

// $conex = new mysqli(SERVIDOR, BASE_DATOS, USUARIO, PASSWORD, PUERTO);
// // $conex = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
// if (!mysql_connect_errno())
//     die("Problemas con la conexión a la base de datos");
// else
//   die("conexion exitosa... ");


try{
  if($conex){
    $sql = "SELECT * FROM alumnos";
    $datos = mysqli_query($conex, $sql)or
    die("Problemas en el select:" . mysqli_error($conexion));;
    $numeroResultado = mysqli_num_rows($datos);
    // echo "numero de estudiantes registrados: ".$numeroResultado;
    if($numeroResultado>0){
    while($fila = mysqli_fetch_assoc($datos)){
      echo "nombre del estudiante: ". $fila["nombre"]. "<br/>";
    }
    }else{

    }
    
  }else{
    echo "problemas de conexion";
  }
  
}catch (Exception $e){
  
  echo "conexion fallida";
}

$conex->close()


?>