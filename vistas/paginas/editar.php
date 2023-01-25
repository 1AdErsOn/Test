<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $usuario = ControladorForm::ctrSelec($id);
    //print_r($usuario);
}
?>

<div class="d-flex justify-content-center">       
    <form class="p-5 bg-light" method="post"> <!-- action="userAccount.php" -->
        <input class="form-control" type="text" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($usuario['first_name'])?$usuario['first_name']:''; ?>" required="">
        <input class="form-control" type="text" name="last_name" placeholder="LAST NAME" value="<?php echo !empty($usuario['last_name'])?$usuario['last_name']:''; ?>" required="">
        <input class="form-control" type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($usuario['email'])?$usuario['email']:''; ?>" required="">
        <input class="form-control" type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($usuario['phone'])?$usuario['phone']:''; ?>" required="">
        <input class="form-control" type="password" name="password" placeholder="PASSWORD">
        <input class="form-control" type="password" name="confirm_password" placeholder="CONFIRM PASSWORD">
        <input type="hidden" name="passwordA" value="<?php echo $usuario['password']; ?>">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <?php
            $actualizar = new ControladorForm();
            $actualizar -> ctrActualizar()
            /*if($registro == "ok"){
                echo "<div class='alert alert-success'>Actualizado</div> ";
            }*/
        ?>
        <input class="btn btn-primary" type="submit" name="signupSubmit" value="UPDATE ACCOUNT">
    </form>
</div>