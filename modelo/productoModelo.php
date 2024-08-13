<?php
require_once "conexion.php";

class ModeloProducto{

 

  static public function mdlInfoProductos(){
    $stmt=Conexion::conectar()->prepare("select * from producto");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegProducto($data){
    $loginProducto=$data["loginProducto"];
    $password=$data["password"];
    $perfil=$data["perfil"];

    $stmt=Conexion::conectar()->prepare("insert into producto(login_producto, password, perfil) values('$loginProducto', '$password', '$perfil')");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }

  static public function mdlActualizarAcceso($fechaHora, $id){
    $stmt=Conexion::conectar()->prepare("update producto set ultimo_login='$fechaHora' where id_producto='$id'");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }

  static public function mdlInfoProducto($id){
    $stmt=Conexion::conectar()->prepare("select * from producto where id_producto=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }
  
  static public function mdlEditProducto($data){

    $password=$data["password"];
    $perfil=$data["perfil"];
    $estado=$data["estado"];
    $id=$data["id"];

    $stmt=Conexion::conectar()->prepare("update producto set password='$password', perfil='$perfil', estado='$estado' where id_producto=$id");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }
  
  static public function mdlEliProducto($id){
    $stmt=Conexion::conectar()->prepare("delete from producto where id_producto=$id");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }
}