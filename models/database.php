<?php

class database{
        // Configuración de conexión (constantes)
    const servidor="localhost";
    const usuariobd="root";
    const clave="";
    const nombrebd="proyectosportzone";

// Método para conectar a la base de datos
    public static function Conectar(){
        try{
            $conexion = new PDO
            ("mysql:host=".self::servidor.";bdname=".
            self::nombrebd.";chartset=utf8",self::usuariobd,
            self::clave);

// Configura atributos de PDO (error en nombre de constantes)
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            return "Fallo ".$e->getMessage();
        }

        
    }

}