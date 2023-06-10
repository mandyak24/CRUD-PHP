<?php
require_once("C:/xampp/htdocs/SERVIDOR/RepasoGeneral/EnsayoExamen/vista/head/head.php");
require_once("C:/xampp/htdocs/SERVIDOR/RepasoGeneral/EnsayoExamen/controlador/usuarioControlador.php");
$obj = new usuarioControlador();
$user = $obj->show($_GET['id']);
?>

<form action="update.php" method="POST" autocomplete="off">
    <h2 class="">Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputNombre" value="<?= $user[1] ?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0] ?>">Cancelar</a>
    </div>
</form>

<?php
require_once("C:/xampp/htdocs/SERVIDOR/RepasoGeneral/EnsayoExamen/vista/head/footer.php");
?>