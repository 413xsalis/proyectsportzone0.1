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
    require_once 'view\administrador\inicio\rutas.php';
    require_once 'view\administrador\Gestion_usuarios\rutasgu.php';


    $controlador = new Controlador();

    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "Gestionar_usuarios") {
            $controlador->verPagina('view\administrador\Gestion_usuarios\rutasgu.php');
        }
 
    } else {
      // $controlador->verPagina('view\administrador\Gestion_usuarios\rutasgu.php');
        $controlador->verPagina('view\administrador\inicio\rutas.php');
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