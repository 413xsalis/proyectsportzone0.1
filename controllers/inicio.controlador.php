<?php


class InicioControlador{
    private $modelo;

    public function __construct(){
        //$this->modelo=new Producto();
    }

    public function inicio(){
        $bd = database::Conectar();

        require_once "view/inicio/header.php";
        require_once "view/inicio/footer.php";
        require_once "view/inicio/principal.php";
    }
}