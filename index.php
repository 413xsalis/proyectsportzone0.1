<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    require_once 'Controllers/controlador.php';


    $controlador = new Controlador();

    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "gestionar") {
            $controlador->verPagina('view/html/administrador/Gestion_usuarios/rutas.php');
        } elseif ($_GET["accion"] == "inicio_admin") {
            $controlador->verPagina('view/html/administrador/inicio/rutas.php');
        } elseif ($_GET["accion"] == "formulario") {
            $controlador->verPagina('view/html/administrador/Formulario_empleados/rutas.php');
        }   elseif ($_GET["accion"] == "gestion_clases") {
            $controlador->verPagina('view/html/colaborador/gestion_clases/rutas.php');
        }   elseif ($_GET["accion"] == "inscripcion_estudiantes") {
            $controlador->verPagina('view/html/colaborador/inscripcion_estudent/rutas.php');
        }   elseif ($_GET["accion"] == "reportes_colab") {
            $controlador->verPagina('view/html/colaborador/reportes/rutas.php');
        }   elseif ($_GET["accion"] == "inicio_colab") {
            $controlador->verPagina('view/html/colaborador/inicio_colab/rutas.php'); 
        }
    } else {
        $controlador->verPagina('view/html/colaborador/inicio_colab/rutas.php');
    }
    ?>
</body>

</html>