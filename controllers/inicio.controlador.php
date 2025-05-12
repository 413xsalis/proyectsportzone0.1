<?php


class InicioControlador{
    private $modelo;

    public function __construct(){
        //$this->modelo=new Producto();
    }

    public function inicio(){
        $bd = database::Conectar();

        require_once "view/formulario/header.php";
        require_once "view/formulario/footer.php";
        require_once "view/formulario/principal.php";
    }
}