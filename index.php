<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'controllers\Controlador.php';
    require_once 'view\administrador\inicio\inicio1.php';
    require_once 'view\administrador\Gestion_usuarios\Gestion_usuarios1.php';


    $controlador = new Controlador();

    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "Gestionar_usuarios") {
            $controlador->verPagina('view\administrador\Gestion_usuarios\Gestion_usuario1.php');
        }
        if ($_GET["accion"] == "consultar") {
            $controlador->verPagina('Vista/html/consultar.php');
        }
        if ($_GET["accion"] == "cancelar") {
            $controlador->verPagina('Vista/html/cancelar.php');
        } elseif ($_GET["accion"] == "guardarCita") {
            $controlador->agregarCita(
                $_POST["asignarDocumento"],
                $_POST["medico"],
                $_POST["fecha"],
                $_POST["hora"],
                $_POST["consultorio"]
            );
        } elseif ($_GET["accion"] == "consultarCita") {
            $controlador->consultarCitas($_POST["consultarDocumento"]);
        } elseif ($_GET["accion"] == "cancelarCita") {
            $controlador->cancelarCitas($_POST["cancelarDocumento"]);
        } elseif ($_GET["accion"] == "ConsultarPaciente") {
            $controlador->consultarPaciente($_GET["documento"]);
        } elseif ($_GET["accion"] == "ingresarPaciente") {
            $controlador->agregarPaciente(
                $_GET["PacDocumento"],
                $_GET["PacNombres"],
                $_GET["PacApellidos"],
                $_GET["PacNacimiento"],
                $_GET["PacSexo"]
            );
        }
    } else {
        $controlador->verPagina('view\administrador\inicio\inicio1.php');
    }
    ?>
</body>

</html>

<!-- php
// Inclusión del archivo de conexión a la base de datos
require_once "models/database.php";

// Si no se especifica un controlador en la URL (parámetro 'c')
if(!isset($_GET['c'])){
        // Carga el controlador de inicio por defecto
    require_once "controllers/inicio.controlador.php";
    $controlador = new InicioControlador();
        // Llama al método "inicio" del controlador
    call_user_func(array($controlador,"Inicio"));

}else{
        // Si se especifica un controlador en la URL
    $controlador = $_GET['c'];
        // Incluye el archivo del controlador solicitado
    require_once "controllers/$controlador.controlador.php";
        // Convierte el nombre del controlador a formato CamelCase (nota: hay un error de sintaxis aquí)
    $controlador = ucwords($controlador)."Controlador";
            // Crea una instancia del controlador
    $controlador = new $controlador;
    // Obtiene la acción a ejecutar (parámetro 'a'), o usa "Inicio" por defecto
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($controlador,$accion));
} -->