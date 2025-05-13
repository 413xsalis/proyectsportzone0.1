<?php
if (!empty($_POST["botoningresar"])) {
    if (empty($_POST["login"]) and empty($_POST["contraseña"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    } else {
        $usuario = $_POST['login'];
        $clave = $_POST['contraseña'];

        // Utiliza sentencias preparadas de PDO
        $sql = $conexion->prepare("SELECT * FROM usuarios_sistema WHERE login = usuario AND contraseña = clave");
        $sql->execute();

        // Utiliza fetch() de PDO correctamente
        if ($conexion = $sql->fetch()) {
            header("location:view/administrador/pagina_administrador.php");
        } else {
            echo "ACCESO DENEGADO";
        }
    }
}
