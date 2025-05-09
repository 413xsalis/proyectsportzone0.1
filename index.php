<?php
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
}