<?php 
require_once "controladores/plantillaCont.php";
require_once "controladores/formCont.php";
require_once "modelos/conexion.php";
$conexion = Conexion::conectar();
echo "<pre>";
print_r($conexion);
echo "</pre>";
$Plantilla = new ControladorPlantilla();
$Plantilla -> ctrTraerPlantilla();