<?php 
require_once("C:/xampp/htdocs/SERVIDOR/RepasoGeneral/EnsayoExamen/controlador/usuarioControlador.php");
$iden=new usuarioControlador();
$iden->delete($_GET['id']);

