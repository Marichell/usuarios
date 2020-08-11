<?php 

require_once "controladores/plantillaControlador.php";

require_once "recursos/generadores.php";

require_once "controladores/usuariosControlador.php";
require_once "modelos/usuarios.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();