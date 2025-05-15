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
        } elseif ($_GET["accion"] == "inicio") {
            $controlador->verPagina('view/html/administrador/inicio/rutas.php');
        } elseif ($_GET["accion"] == "formulario") {
            $controlador->verPagina('view/html/administrador/Formulario_empleados/rutas.php');
        }
    } else {
        $controlador->verPagina('view/html/administrador/inicio/rutas.php');
    }
    ?>
</body>

</html>