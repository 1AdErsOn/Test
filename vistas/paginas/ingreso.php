<?php
if(isset($_SESSION["Ingreso"])){
    $redirectURL ="index.php?pagina=inicio";
    header("Location: $redirectURL");
    return;
}
$ingreso = new ControladorForm();
$ingreso -> ctrIngreso();
?>
<div class="d-flex justify-content-center"> 
    <form class="p-5 bg-light" method="post"><!-- action=""--> 
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="ingresar">Ingresar</button>
    </form>
</div>
