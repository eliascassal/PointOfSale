<?php
$ruta = parse_url($_SERVER["REQUEST_URI"]);

if (isset($ruta["query"])) {
  if (
    $ruta["query"] == "ctrRegFactura" ||
    $ruta["query"] == "ctrEditFactura" ||
    $ruta["query"] == "ctrEliFactura"
  ) {
    $metodo = $ruta["query"];
    $Factura = new ControladorFactura();
    $Factura->$metodo();
  }
}

class ControladorFactura
{

   static public function ctrInfoFacturas()
  {
    $respuesta = ModeloFactura::mdlInfoFacturas();
    return $respuesta;
  }

  static public function ctrRegFactura()
  {
    require "../modelo/FacturaModelo.php";

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $data = array(
      "loginFactura" => $_POST["login"],
      "password" => $password,
      "perfil" => "Moderador"
    );

    $respuesta = ModeloFactura::mdlRegFactura($data);

    echo $respuesta;
  }

  static public function ctrInfoFactura($id)
  {
    $respuesta = ModeloFactura::mdlInfoFactura($id);
    return $respuesta;
  }

  static function ctrEditFactura()
  {
    require "../modelo/FacturaModelo.php";

    if ($_POST["password"] == $_POST["passActual"]) {
      $password = $_POST["password"];
    } else {
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }


    $data = array(
      "password" => $password,
      "id" => $_POST["idFactura"],
      "perfil" => $_POST["perfil"],
      "estado" => $_POST["estado"]
    );

    ModeloFactura::mdlEditFactura($data);
    $respuesta = ModeloFactura::mdlEditFactura($data);

    echo $respuesta;
  }

  static function ctrEliFactura()
  {
    require "../modelo/FacturaModelo.php";
    $id = $_POST["id"];

    $respuesta = ModeloFactura::mdlEliFactura($id);
    echo $respuesta;
  }
}
