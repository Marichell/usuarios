<?php
class UsuariosControlador
{


//AGREGAR
//-----------------------------------
  public function AgregarUsuario(){

    if (isset($_POST["inp-nombre"])) {

     $tablaBD = "usuarios";

     $datosControlador = array(
      "nombre" =>$_POST["inp-nombre"],
      "email" =>$_POST["inp-email"],
      "bio" =>$_POST["inp-bio"],
      "imagen" =>subirImagen("inp-imagen"));

     $respuesta = UsuariosModelo::AgregarUsuarioMdl($tablaBD, $datosControlador);

     if ($respuesta == true) {
      exitoMSG("usuarios");
    }else {
      errorMSG("usuarios");
    }
  } 
}


//VER
//-----------------------------------
public function VerUsuarios()
{

  $tablaBD = "usuarios";
  $respuesta = UsuariosModelo::VerUsuarioMdl($tablaBD);
  return $respuesta;
}


//CONSULTAR
//-----------------------------------
public function LlamarUsuario($item, $valor){
  $tablaBD = "usuarios";
  $respuesta = UsuariosModelo::LlamarUsuarioMdl($tablaBD, $item, $valor);
  return $respuesta;
}


// EDITAR
// -----------------------------------
public function EditarUsuario(){

  if (isset($_POST["editarID"])) {

   $tablaBD = "usuarios";
   $datosControlador = array("id" => $_POST["editarID"],
    "nombre" => $_POST["editar-nombre"],
    "email" => $_POST["editar-email"],
    "bio" => $_POST["editar-bio"],
    "imagen" =>editarImagen($_POST["imagenActual"], "editar-imagen"));

   $respuesta = UsuariosModelo::ActualizarUsuarioMdl($tablaBD, $datosControlador);

   if ($respuesta == true) {
    exitoMSG("usuarios");
  }else{
    errorMSG("usuarios");
  }
}
}

//ELIMINAR
//--------------------------------------------

public function BorrarUsuario(){

  if(isset($_GET["borrarID"])){
   $tablaBD = "usuarios";
   $datosControlador = $_GET["borrarID"];

   if ($_GET["borrarImagen"] != "") {
    unlink($_GET["borrarImagen"]);
  }

  $respuesta = UsuariosModelo::BorrarUsuarioMdl($tablaBD, $datosControlador);

  if ($respuesta == true) {
    exitoMSG("usuarios");
  }else{
    errorMSG("usuarios");
  }

}

}


}

