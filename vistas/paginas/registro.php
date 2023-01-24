<div class="d-flex justify-content-center">       
    <form class="p-5 bg-light" method="post"> <!-- action="userAccount.php" -->
        <input class="form-control" type="text" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required="">
        <input class="form-control" type="text" name="last_name" placeholder="LAST NAME" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required="">
        <input class="form-control" type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
        <input class="form-control" type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required="">
        <input class="form-control" type="password" name="password" placeholder="PASSWORD" required="">
        <input class="form-control" type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
        <?php
        /* Metodo no estatico */ 
           //$registro = new ControladorForm();
           //$registro -> ctrRegistro();
            $registro = ControladorForm::ctrRegistro();
            if($registro == "ok"){
                echo "<div class='alert alert-success'>Registrado</div> ";
            }
            /* script if($registro == "ok"){
                //echo <div class=alert alert->Registrado</div>;
                if (window.history.replaceState){
                    window.history(null,null,window.location.href);
                }
            }*/
        ?>
        <input class="btn btn-primary" type="submit" name="signupSubmit" value="CREATE ACCOUNT">
    </form>
</div>