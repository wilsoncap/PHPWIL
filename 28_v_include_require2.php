<?php 

// include trata de buscra el archivo para trabajar con el, pero si no lo encuentra solo manda una advertencia
// se recomienda usarlo cuando el archivo no es de vital importancia 
// include '28_v_include_require.php';


// en cambio con require sino encunetra el archivo manda un fatka error, se recomienda usarlo cuando se necesita 
// de un archivo de vital importancia como una conexion a DB


// require_once->se asegura que la importacion del archivo se lleva a cabo una sola vez en las dos sentencias
// include_once

require '28_v_include_require.php';

echo sumar(6, 12) . "<br>";




?>