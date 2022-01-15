<?php 


$conexion = mysqli_connect("db4free.net", "wilsonpru270921", "wili@159", "prueba270921") or
    die("Problemas con la conexión");

/// select cursos
$s_cursos = mysqli_query($conexion, "select codigo, nombrecurso from cursos") or
        die("Problemas en el select cursos:" . mysqli_error($conexion)); 
?>