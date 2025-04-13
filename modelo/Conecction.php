<?php
class Conecction{
    public function getConnetion(){
        $servidor = "localhost";
        $bd = "login";
        $usuario = "root";
        $clave = "root";

        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}
?>