<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    require_once 'controllers/controlador.php';


    $controlador = new ControladorLogin();

    if (isset($_GET["accion"]) == "inicio") {
        if ($_GET["administrador"] === "administrador") {
            $controlador->verPagina('view/administrador/rutas.php');
        } elseif ($_GET["colaboradores"] === "colaboradores") {
            $controlador->verPagina('view/colaborador/rutas.php');
        }
    } else {
        $controlador->verPagina('view/login/login.php');
    }
    ?>
</body>

</html>