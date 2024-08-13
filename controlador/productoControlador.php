<?php
$ruta = parse_url($_SERVER["REQUEST_URI"]);

if (isset($ruta["query"])) {
  if (
    $ruta["query"] == "ctrRegProducto" ||
    $ruta["query"] == "ctrEditProducto" ||
    $ruta["query"] == "ctrEliProducto"
  ) {
    $metodo = $ruta["query"];
    $producto = new ControladorProducto();
    $producto->$metodo();
  }
}

class ControladorProducto
{

  static public function ctrInfoproductos()
  {
    $respuesta = ModeloProducto::mdlInfoProductos();
    return $respuesta;
  }

  static public function ctrRegProducto()
  {
    require "../modelo/productoModelo.php";

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $data = array(
      "loginproducto" => $_POST["login"],
      "password" => $password,
      "perfil" => "Moderador"
    );

    $respuesta = ModeloProducto::mdlRegproducto($data);

    echo $respuesta;
  }

  static public function ctrInfoProducto($id)
  {
    $respuesta = ModeloProducto::mdlInfoProducto($id);
    return $respuesta;
  }

  static function ctrEditProducto()
  {
    require "../modelo/productoModelo.php";

    if ($_POST["password"] == $_POST["passActual"]) {
      $password = $_POST["password"];
    } else {
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }


    $data = array(
      "password" => $password,
      "id" => $_POST["idproducto"],
      "perfil" => $_POST["perfil"],
      "estado" => $_POST["estado"]
    );

    ModeloProducto::mdlEditProducto($data);
    $respuesta = ModeloProducto::mdlEditProducto($data);

    echo $respuesta;
  }

  static function ctrEliProducto()
  {
    require "../modelo/productoModelo.php";
    $id = $_POST["id"];

    $respuesta = Modeloproducto::mdlEliProducto($id);
    echo $respuesta;
  }
}
