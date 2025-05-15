<<<<<<< Updated upstream
<html>
=======
<!-- <!DOCTYPE html>
<html lang="en">
>>>>>>> Stashed changes

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<<<<<<< Updated upstream
    <?php
    require_once 'Controllers/controlador.php';
=======
    ?php
    require_once 'controllers\Controlador.php';
    require_once 'view\administrador\inicio\rutas.php';
    require_once 'view\administrador\Gestion_usuarios\rutasgu.php';
>>>>>>> Stashed changes


    $controlador = new Controlador();

    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "gestionar") {
            $controlador->verPagina('view/html/administrador/Gestion_usuarios/rutas.php');
        } elseif ($_GET["accion"] == "inicio") {
            $controlador->verPagina('view/html/administrador/inicio/rutas.php');
        } elseif ($_GET["accion"] == "formulario") {
            $controlador->verPagina('view/html/administrador/Formulario_empleados/rutas.php');
        }
    } else {
        $controlador->verPagina('view/html/administrador/inicio/rutas.php');
    }
    ?>
</body>

<<<<<<< Updated upstream
</html>
=======
</html> -->

<?php
// Inclusión del archivo de conexión a la base de datos
require_once "models/database.php";

// Si no se especifica un controlador en la URL (parámetro 'c')
if(!isset($_GET['c'])){
        // Carga el controlador de inicio por defecto
    require_once "controllers/controlador.php";
    $controlador = new Controlador();
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
}
?>
>>>>>>> Stashed changes
