<?php
session_start(); // Iniciar sesión aquí para asegurarte de que está disponible

require_once(__DIR__ . "/../models/conexion_bd.php");


if (!class_exists('ControladorLogin')) {
    class ControladorLogin
    {
        // Método para ver páginas
        public function verPagina($ruta)
        {
            require_once $ruta;
        }

        // Método para manejar el inicio de sesión
        public function login()
        {
            if (isset($_POST["login"], $_POST["contraseña"], $_POST["rol"])) {
                $usuario = trim($_POST["login"]);
                $contraseña = trim($_POST["contraseña"]);
                $rol = trim($_POST["rol"]);

                // Conexión a BD
                $conexion = conectarBaseDatos();

                // Preparar consulta para evitar inyección SQL
                $stmt = $conexion->prepare("SELECT * FROM usuarios_sistema WHERE login = ? AND contraseña = ? AND rol = ?");
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
                            header("Location:../view/administrador/rutas.php");
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
        }
    }
}
?>


