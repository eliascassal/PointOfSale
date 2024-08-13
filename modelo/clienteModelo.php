<?php
require_once "conexion.php";

class ModeloCliente{

 
  static public function mdlInfoClientes(){
    $stmt=Conexion::conectar()->prepare("select * from cliente");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegCliente($data){
    $loginCliente=$data["loginCliente"];
    $password=$data["password"];
    $perfil=$data["perfil"];

    $stmt=Conexion::conectar()->prepare("insert into cliente(login_cliente, password, perfil) values('$loginCliente', '$password', '$perfil')");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }

  static public function mdlActualizarAcceso($fechaHora, $id){
    $stmt=Conexion::conectar()->prepare("update cliente set ultimo_login='$fechaHora' where id_cliente='$id'");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }

  static public function mdlInfoCliente($id){
    $stmt=Conexion::conectar()->prepare("select * from cliente where id_cliente=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }
  
  static public function mdlEditcliente($data){

    $password=$data["password"];
    $perfil=$data["perfil"];
    $estado=$data["estado"];
    $id=$data["id"];

    $stmt=Conexion::conectar()->prepare("update cliente set password='$password', perfil='$perfil', estado='$estado' where id_cliente=$id");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }
  
  static public function mdlEliCliente($id){
    $stmt=Conexion::conectar()->prepare("delete from cliente where id_cliente=$id");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }

    $stmt->close();
    $stmt->null();
  }
}