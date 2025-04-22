<?php


class InicioControlador{
    private $modelo;  // Propiedad para modelos 

    public function __construct(){
        //$this->modelo=new Producto();
    }

    public function inicio(){
// Obtiene conexión a la base de datos
        $bd = Database::Conectar();
// Carga las vistas en orden específico
        require_once "view/login/login.php";
    }
}