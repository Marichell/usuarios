<?php 

require_once '../controladores/usuariosControlador.php';
require_once '../modelos/usuarios.php';

class UsuarioAjax{
	public $editarID;
	public function llamarUsuarioAjax(){

		$item = "id";
		$valor = $this->editarID;
		$respuesta = UsuariosControlador::LlamarUsuario($item, $valor);
		echo json_encode($respuesta);
	}
}

if(isset($_POST["editarID"])){
	$llamarUsuario = new UsuarioAjax();
	$llamarUsuario -> editarID = $_POST["editarID"];
	$llamarUsuario -> llamarUsuarioAjax();
}