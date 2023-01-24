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
}