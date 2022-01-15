<?php 


// Motrar todos los errores de PHP
error_reporting(-1);

// No mostrar los errores de PHP
error_reporting(0);

// Motrar todos los errores de PHP
error_reporting(E_ALL);

// Motrar todos los errores de PHP
ini_set('error_reporting', E_ALL);



$conexion = mysqli_connect("db4free.net", "wilsonpru270921", "wili@159", "prueba270921") or
    die("Problemas con la conexión");

/// select cursos
$s_cursos = mysqli_query($conexion, "select codigo, nombrecurso from cursos") or
        die("Problemas en el select cursos:" . mysqli_error($conexion)); 
        
// class cursos{

//   private $codigo;
//   private $nombrecurso;
//   private $conexion;
  
//   public function __construct($cod, $nom){
//     $this->codigo = $cod;
//     $this->nombrecurso = $nom;
//   }

//   //--Mostrar cursos
//   public function mostrarCursos(){
//     mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
//         die("Problemas en el select:" . mysqli_error($conexion));
//   }

//   public function saludar(){
//     echo "<h2>Hola usuario</h2>";
//   }
// }


mysqli_close($conexion);
?>