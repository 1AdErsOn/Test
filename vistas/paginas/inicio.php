<?php
$usuarios = ControladorForm::ctrRegistros();
//print_r($usuarios);
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $key => $value): ?>
        <tr>
            <td><?php echo $value["first_name"]; ?></td>
            <td><?php echo $value["last_name"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["phone"]; ?></td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-danger">Edit</button>
                    <button class="btn btn-warning">Delete</button>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>