<?php

require_once "models/database.php";

if(!isset($_GET['c'])){
    require_once "controllers/inicio.controlador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador,"Inicio"));

}else{
    $controlador = $_GET['c'];
    require_once "controllers/$controlador.controlador.php";
    $controlador = ucwords($controlador)."Controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($controlador,$accion));
}