<?php
/* controladores */
require_once "controlador/plantillaControlador.php";
require_once "controlador/usuarioControlador.php";


/*modelos*/
require_once "modelo/usuarioModelo.php";

$plantilla=new ControladorPlantilla();
$plantilla->ctrPlantilla();
