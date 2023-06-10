<?php 

class Conexion{

    private $host = "localhost";
    private $dbname="colegio";
    private $username="root";
    private $password="";

    public function conectar(){
        try {
            $conexion = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error (".$e->getCode().") al abrir ".
            "la base de datos: " .$e->getMessage();
        }
    }

    public function desconectar($conexion){
        $conexion = null;
    }

}

// $obj= new Conexion();
// print_r($obj->conectar());

?>

