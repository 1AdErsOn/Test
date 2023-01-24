<?php

class ControladorForm{
    static public function ctrRegistro(){
        if(isset($_POST["signupSubmit"])){
            $tabla = "admins";
            $password = $_POST["password"];
            $password_hash = md5($password); 
            $datos = array( 
                'first_name' => $_POST['first_name'], 
                'last_name' => $_POST['last_name'], 
                'email' => $_POST['email'], 
                'password' => $password_hash, 
                'phone' => $_POST['phone'] 
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
            return $respuesta;
        }
    }
    static public function ctrRegistros(){
        $tabla = "admins";
        $respuesta = ModeloFormularios::mdlRegistros($tabla);
        return $respuesta;
    }
    public function ctrIngreso(){
        if(isset($_POST["ingresar"])){
            $tabla = "admins";
            $item = "email";
            $valor = $_POST['email'];
            $redirectURL ="index.php?pagina=inicio";
            $password = trim($_POST['pswd']);
            $password_hash = md5($password);
            $respuesta = ModeloFormularios::mdlConsulta($tabla, $item, $valor);
            //echo $respuesta["password"];
            if($respuesta["email"] == $_POST["email"] && $respuesta["password"] == $password_hash){
                //echo "ingreso";
                header("Location: $redirectURL");
            }else{
                //echo "NO ingreso";
                $redirectURL ="index.php?pagina=ingreso";
                header("Location: $redirectURL");
            }            
        }
    }
}