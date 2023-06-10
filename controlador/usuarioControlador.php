<?php 

class usuarioControlador{

    private $modelo;

    // Incluyendo el modelo puedo acceder a insertar y a todo lo que contenga modelo
    public function __construct(){
        require_once("C:/xampp/htdocs/SERVIDOR/RepasoGeneral/EnsayoExamen/modelo/usuarioModelo.php");
        $this->modelo=new UsuarioModelo();
    }

    public function guardar($nombre){

       $id=$this->modelo->insertar($nombre);
       return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");

    }

    public function show($id){
        return ($this->modelo->show($id) !=false) ? $this->modelo->show($id) : header("Location: index.php") ;

    }

    public function index(){
        return ($this->modelo->index()) ? $this->modelo->index(): false;
    }

    public function update($id,$nombre){
        return ($this->modelo->update($id,$nombre)!=false) ? header("Location:../../vista/usuario/show.php?id=".$id): header("Location:index.php");
    }
   
    public function delete($id){
        return ($this->modelo->delete($id)) ? header("Location: index.php") : header("Location:show.php?id=".$id) ;
    }
    

}

?>