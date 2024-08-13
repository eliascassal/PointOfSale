<?php
require_once "conexion.php";

class ModeloFactura{

 
  static public function mdlInfoFacturas(){
    $stmt=Conexion::conectar()->prepare("select * from Factura");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegFactura($data){
    $loginFactura=$data["loginFactura"];
    $password=$data["password"];
    $perfil=$data["perfil"];

    $stmt=Conexion::conectar()->prepare("insert into Factura(login_Factura, password, perfil) values('$loginFactura', '$password', '$perfil')");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }

  static public function mdlActualizarAcceso($fechaHora, $id){
    $stmt=Conexion::conectar()->prepare("update Factura set ultimo_login='$fechaHora' where id_Factura='$id'");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }

  static public function mdlInfoFactura($id){
    $stmt=Conexion::conectar()->prepare("select * from Factura where id_Factura=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }
  
  static public function mdlEditFactura($data){

    $password=$data["password"];
    $perfil=$data["perfil"];
    $estado=$data["estado"];
    $id=$data["id"];

    $stmt=Conexion::conectar()->prepare("update Factura set password='$password', perfil='$perfil', estado='$estado' where id_Factura=$id");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }
  
  static public function mdlEliFactura($id){
    $stmt=Conexion::conectar()->prepare("delete from Factura where id_Factura=$id");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }
}