<?php

require_once("C:/xampp/htdocs/SERVIDOR/RepasoGeneral/EnsayoExamen/controlador/usuarioControlador.php");
$obj=new usuarioControlador();
$obj->update($_POST['id'],$_POST['nombre']);

?>