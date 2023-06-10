<?php

class UsuarioModelo
{

    private $PDO;

    public function __construct()
    {
        require_once('C:\xampp\htdocs\SERVIDOR\RepasoGeneral\EnsayoExamen\modelo\Conexion.php');
        $con = new Conexion();
        $this->PDO = $con->conectar();
    }

    public function insertar($nombre)
    {
        $stmt = $this->PDO->prepare("INSERT INTO alumnos VALUES(null, :nombre)");
        $stmt->bindParam(":nombre", $nombre);
        return ($stmt->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stmt=$this->PDO->prepare("SELECT * from alumnos WHERE id=:id limit 1");
        $stmt->bindParam(":id", $id);
        return ($stmt->execute()) ? $stmt->fetch() : false  ; //Si se ejecuta la consulta $stmt se realiza un fetch de la consulta y si no devuelve false.
    }

    public function index(){
        $stmt=$this->PDO->prepare("SELECT * FROM alumnos");
        return ($stmt->execute()) ? $stmt->fetchAll() : false;
    }
    public function update($id,$nombre){
        $stmt=$this->PDO->prepare("UPDATE alumnos SET nombre=:nombre WHERE id=:id");
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":id",$id);
        return ($stmt->execute()) ? $id : false;

    }
    public function delete($id){
        $stmt=$this->PDO->prepare("DELETE FROM alumnos WHERE id=:id");
        $stmt->bindParam(":id",$id);
        return ($stmt->execute()) ? true : false ;
    }
}
