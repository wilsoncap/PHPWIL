<?php

require_once '40_v_define.php';

$conex = new mysqli(SERVIDOR, BASE_DATOS, USUARIO, PASSWORD, PUERTO);
// $conex = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
if ($conex->connect_error)
    die("Problemas con la conexión a la base de datos");
else
  die("conexion exitosa... ");

$conex->close()
?>