<?php 
require_once "conexion.php";

class UsuariosModelo extends Conexion
{

 //AGREGAR USUARIOS
//--------------------------------------------
  static public function AgregarUsuarioMdl($tablaBD, $datosControlador)
  {
    $pdo = Conexion::conectarBase()->prepare("INSERT INTO $tablaBD (nombre, email, bio, imagen) VALUES (:nombre, :email, :bio, :imagen)");

    $pdo -> bindParam(":nombre", $datosControlador["nombre"], PDO::PARAM_STR);
    $pdo -> bindParam(":email", $datosControlador["email"], PDO::PARAM_STR);
    $pdo -> bindParam(":bio", $datosControlador["bio"], PDO::PARAM_STR);
    $pdo -> bindParam(":imagen", $datosControlador["imagen"], PDO::PARAM_STR);

    if ($pdo -> execute()) {
      return true;
    }else{
      return false;
    }
    $pdo -> close();
  }

//VER USUARIOS
//--------------------------------------------
  static public function VerUsuarioMdl($tablaBD){
   $pdo = Conexion::conectarBase()->prepare("SELECT id, nombre, email, bio, imagen FROM $tablaBD ORDER BY id DESC");

   $pdo -> execute();
   return $pdo -> fetchAll();
   $pdo -> close();
 }


//CONSULTAR USUARIOS
//--------------------------------------------
 static public function LlamarUsuarioMdl($tablaBD, $item, $valor){
   if($item != null){
    $pdo = Conexion::conectarBase()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

    $pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);
    $pdo -> execute();
    return $pdo -> fetch();
  }else{
    $pdo = conexion::conectarBase()->prepare("SELECT * FROM $tablaBD");
    $pdo -> execute();
    return $pdo -> fetchAll();
  }
  $pdo -> close();
}

//ACTUALIZAR USUARIOS
//--------------------------------------------
static public function ActualizarUsuarioMdl($tablaBD, $datosControlador){
 $pdo = conexion::conectarBase()->prepare("UPDATE $tablaBD SET nombre = :nombre, email = :email, bio = :bio, imagen = :imagen WHERE id = :id");

 $pdo -> bindParam(":id", $datosControlador["id"], PDO::PARAM_INT);
 $pdo -> bindParam(":nombre", $datosControlador["nombre"], PDO::PARAM_STR);
 $pdo -> bindParam(":email", $datosControlador["email"], PDO::PARAM_STR);
 $pdo -> bindParam(":bio", $datosControlador["bio"], PDO::PARAM_STR);
 $pdo -> bindParam(":imagen", $datosControlador["imagen"], PDO::PARAM_STR);

 if ($pdo -> execute()) {
  return true;
}else{
  return false;
}
$pdo -> close();
}


//ELIMINAR USUARIOS
//--------------------------------------------
static public function BorrarUsuarioMdl($tablaBD, $datosControlador){
  $pdo = Conexion::conectarBase()->prepare("DELETE FROM $tablaBD WHERE id = :id");

  $pdo -> bindParam(":id", $datosControlador, PDO::PARAM_INT);
  if ($pdo -> execute()) {
    return true;
  }else{
    return false;
  }
  $pdo -> close();
}

}