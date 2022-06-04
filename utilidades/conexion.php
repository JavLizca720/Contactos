
<?php

$con= Conexion::getConexion();

class Conexion{
    public static function getConexion(){
        $conn =  null; 
        try {
            $conn = new PDO("mysql:host=localhost;dbname=contactos", "root", "12345");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo 'Error:'. $ex->getMessage();
        }
        return $conn; 
    }
}