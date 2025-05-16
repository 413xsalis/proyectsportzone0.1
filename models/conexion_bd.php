<?php
function conectarBaseDatos() {
    $conexion = new mysqli("localhost", "root", "", "sportzone");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;
}
?>
