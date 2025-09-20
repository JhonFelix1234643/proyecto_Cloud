<?php
$host = "localhost";  
$user = "root";       
$password = "";       
$dbname = "adminis"; 

// Crear la conexión
$conexion = new mysqli($host, $user, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
