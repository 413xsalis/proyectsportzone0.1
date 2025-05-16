<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    require_once 'controllers/controlador.php';


    $controlador = new ControladorLogin();

    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "inicio") {
            $controlador->verPagina('view/html/administrador/inicio/rutas.php');
        } 
    } else {
        $controlador->verPagina('view/login/login.php');
    }
    ?>
</body>

</html>