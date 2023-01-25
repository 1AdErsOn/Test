<?php
$Mensaje = "";
if(!isset($_SESSION["Ingreso"])){
    $redirectURL ="index.php?pagina=ingreso";
    header("Location: $redirectURL");
    return;
}else{
    if(isset($_SESSION["mensaje"])){
        $Mensaje = $_SESSION["mensaje"];
        unset($_SESSION["mensaje"]);
    }
    //$redirectURL ="index.php?pagina=ingreso";
    //header("Location: $redirectURL");
}
$usuarios = ControladorForm::ctrRegistros();
//$actualizar = new ControladorForm();
//$actualizar -> ctrActualizar()
//print_r($usuarios);
?>
<h3><?php echo $Mensaje; ?></h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>N:</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $key => $value): ?>
        <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $value["first_name"]; ?></td>
            <td><?php echo $value["last_name"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["phone"]; ?></td>
            <td><?php echo $value["fecha"]; ?></td>
            <td>
                <div class="btn-group">
                    <div class="px-1">
                        <a href="index.php?pagina=editar&id=<?php echo $value['id']; ?>" class="btn btn-danger">Edit</a>
                    </div>
                    <form method="post">
                        <input type="hidden" name="ID" value="<?php echo $value['id']; ?>">
                        <button type="submit" class="btn btn-warning">Delete</button>
                        <?php
                            $eliminar = new ControladorForm();
                            $eliminar -> ctrEliminar();
                        ?>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>