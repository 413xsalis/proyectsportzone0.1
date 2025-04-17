<?php

class database{
    const servidor="localhost";
    const usuariobd="root";
    const clave="";
    const nombrebd="proyectosportzone";

    public static function Conectar(){
        try{
            $conexion = new PDO
            ("mysql:host=".self::servidor.";bdname=".
            self::nombrebd.";chartset=utf8",self::usuariobd,
            self::clave);

            $conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            return "Fallo ".$e->getMessage();
        }

        
    }

}