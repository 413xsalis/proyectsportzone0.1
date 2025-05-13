<?php
class Controlador
{
    public function verPagina($ruta)
    {
        require_once $ruta;
    }
    // public function agregarCita($doc, $med, $fec, $hor, $con)
    // {
    //     $cita = new Cita(
    //         null,
    //         $fec,
    //         $hor,
    //         $doc,
    //         $med,
    //         $con,
    //         "Solicitada",
    //         "Ninguna"
    //     );
    //     $gestorCita = new GestorCita();
    //     $id = $gestorCita->agregarCita($cita);
    //     $result = $gestorCita->consultarCitaPorId($id);
    //     require_once 'Vista/html/confirmarCita.php';
    // }

    // public function consultarCitas($doc)
    // {
    //     $gestorCita = new GestorCita();
    //     $result = $gestorCita->consultarCitasPorDocumento($doc);
    //     require_once 'Vista/html/consultarCitas.php';
    // }

    // public function cancelarCitas($doc)
    // {
    //     $gestorCita = new GestorCita();
    //     $result = $gestorCita->consultarCitasPorDocumento($doc);
    //     require_once 'Vista/html/cancelarCitas.php';
    // }

    // public function consultarPaciente($doc)
    // {
    //     $gestorCita = new GestorCita();
    //     $result = $gestorCita->consultarPaciente($doc);
    //     require_once 'Vista/html/consultarPaciente.php';
    // }

    // public function agregarPaciente($doc, $nom, $ape, $fec, $sex)
    // {
    //     $paciente = new Paciente($doc, $nom, $ape, $fec, $sex);
    //     $gestorCita = new GestorCita();
    //     $registros = $gestorCita->agregarPaciente($paciente);
    //     if ($registros > 0) {
    //         echo "Se insertó el paciente con exito";
    //     } else {
    //         echo "Error al grabar el paciente";
    //     }
    // }
}


// php


// class Controlador{
//     private $modelo;  // Propiedad para modelos 

//     public function __construct(){
//         //$this->modelo=new Producto();
//     }

//     public function inicio(){
// // Obtiene conexión a la base de datos
//         $bd = Database::Conectar();
// // Carga las vistas en orden específico
//         require_once "view/administrador/inicio/principal.php";
//         require_once "view/administrador/inicio/header.php";
//         require_once "view/administrador/inicio/footer.php";
//     }
// } 