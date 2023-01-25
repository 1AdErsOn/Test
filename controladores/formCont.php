<?php

class ControladorForm{
    static public function ctrRegistro(){
        if(isset($_POST["signupSubmit"])){
            $tabla = "admins";
            $password = trim($_POST["password"]);
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
    static public function ctrSelec($id){
        $tabla = "admins";
        $item = "id";
        $respuesta = ModeloFormularios::mdlConsulta($tabla, $item, $id);
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
                $_SESSION['Ingreso'] = $respuesta['id'];
                header("Location: $redirectURL");
            }else{
                //echo "NO ingreso";
                $redirectURL ="index.php?pagina=ingreso";
                header("Location: $redirectURL");
            }            
        }
    }
    public function ctrActualizar(){
        if(isset($_POST["signupSubmit"])){
            $tabla = "admins";
            $id = $_POST['id'];
            $password = trim($_POST["password"]);
            $password_hash ="";
            if($password != ""){
                $password_hash = md5($password);
            }else{
                $password_hash = $_POST["passwordA"];
            }
            $datos = array( 
                'first_name' => $_POST['first_name'], 
                'last_name' => $_POST['last_name'], 
                'email' => $_POST['email'], 
                'password' => $password_hash, 
                'phone' => $_POST['phone'] 
            );
            $respuesta = ModeloFormularios::mdlActualizar($tabla, $datos,$id);
            if($respuesta == "ok"){
                $mensage = "Actualizado";
                $_SESSION["mensaje"] = $mensage;
                $redirectURL ="index.php?pagina=inicio";
                header("Location: $redirectURL");
            }
        }
    }
    public function ctrEliminar(){
        if(isset($_POST["ID"])){
            $tabla = "admins";
            $id = trim($_POST["ID"]);
            $respuesta = ModeloFormularios::mdlEliminar($tabla, $id);
            if($respuesta == "ok"){
                $mensage = "Eliminado";
                $_SESSION["mensaje"] = $mensage;
                $redirectURL ="index.php?pagina=inicio";
                header("Location: $redirectURL");
            }
        }
    }
}