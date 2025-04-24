<?php
session_start(); // Iniciar sesión
include "conexion_bd.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Consultar la base de datos
    $sql = "SELECT * FROM usuarios_sistema WHERE login='$usuario' AND contraseña='$contraseña'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // Redirigir según el rol
        if ($rol == "administrador") {
            header("Location: administrador.php");
        } elseif ($rol == "colaboradores") {
            header("Location: colaboradores.php");
        } elseif ($rol == "instructores") {
            header("Location: instructores.php");
        }
    } else {
        echo "<script>alert('Credenciales incorrectas');</script>";
    }
}
?>