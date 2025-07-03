<?php 
define("DB_HOST","localhost");
define("DB_USUARIO","messi");
define("DB_PASSWORD","1234");
define("DB_NOMBRE", "seneca");

// Conectar a la base de datos

$conexion = mysqli_connect(DB_HOST,DB_USUARIO,DB_PASSWORD,DB_NOMBRE) or die("no se puede conectar al servidor"); 

?>