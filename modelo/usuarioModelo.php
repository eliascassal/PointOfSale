<?php

require_once "conexion.php";

Class ModeloUsuario{
    /*=================
    acceso al sistema 
    ===================*/
static public function mdlAccesoUsuario($usuario){
$stmt=Conexion::conectar()->prepare("select * from usuario where login_usuario='$usuario'");
$stmt->execute();

return $stmt->fetch();

}
}