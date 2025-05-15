<?php
session_start(); // Iniciar sesión

// Incluir conexión a la base de datos con ruta absoluta
require_once "models/conexion_bd.php";

// Verificar si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos están definidos
    if (isset($_POST["login"]) && isset($_POST["contraseña"]) && isset($_POST["rol"])) {
        $usuario = trim($_POST["login"]);
        $contraseña = trim($_POST["contraseña"]);
        $rol = trim($_POST["rol"]);

        // Preparar la consulta para evitar inyección SQL
        $stmt = $conexion->prepare("SELECT * FROM usuarios_sistema WHERE login='$usuario' AND contraseña='$contraseña' AND rol='$rol'");
        $stmt->bind_param("sss", $usuario, $contraseña, $rol);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Guardar datos en sesión
            $_SESSION["login"] = $usuario;
            $_SESSION["rol"] = $rol;

            // Redirigir según el rol
            switch ($rol) {
                case "administrador":
                    header("Location: view/administrador/pagina_administrador.php");
                    exit;
                case "colaboradores":
                    header("Location: colaboradores.php");
                    exit;
                case "instructores":
                    header("Location: instructores.php");
                    exit;
                default:
                    echo "Rol no identificado.";
                    exit;
            }
        } else {
            echo "<script>alert('Credenciales incorrectas'); window.location.href='login.php';</script>";
        }
        // Cerrar conexión
        $stmt->close();
        $conexion->close();
    } else {
        echo "Faltan datos en el formulario.";
    }
} else {
    echo "";
}
