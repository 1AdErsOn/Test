<?php

class ControladorForm{
    static public function ctrRegistro(){
        if(isset($_POST["signupSubmit"])){
            return "ok";
        }
    }
}