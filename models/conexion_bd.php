<?php
function conectarBaseDatos() {
    $conexion = new mysqli("localhost", "root", "", "sportzone","3306");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;
}
?>
