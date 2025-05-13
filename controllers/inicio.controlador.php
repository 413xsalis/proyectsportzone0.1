<?php


class InicioControlador{
    private $modelo;

    public function __construct(){
        //$this->modelo=new Producto();
    }

    public function inicio(){
        $bd = database::Conectar();

        require_once "view/reportes/header.php";
        require_once "view/reportes/footer.php";
        require_once "view/reportes/principal.php";
    }
}