<?php


class InicioControlador{
    private $modelo;

    public function __construct(){
        //$this->modelo=new Producto();
    }

    public function inicio(){
        $bd = database::Conectar();

        require_once "view/inscripcion_estudent/header.php";
        require_once "view/inscripcion_estudent/footer.php";
        require_once "view/inscripcion_estudent/principal.php";
    }
}