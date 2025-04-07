<?php
if(!empty($_POST["botoningresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo"LOS CAMPOS ESTAN VACIOS";
    } else {
        $usuario=$_POST['usuario'];
        $clave=$_POST['password'];
        $sql=$conexion->query("SELECT * FROM usuario where usuario='$usuario' and clave='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo"ACCESO DENEGADO";
        }
    }   
    }
?>