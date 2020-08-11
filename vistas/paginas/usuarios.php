<div class="container-fluid">

	<div class="row">

		<?php 

		include "modulos/agregar.php";
		include "modulos/ver.php";
		include "modulos/editar.php";

		// Llamada la Función para Eliminar Usuarios
		$borrar = new UsuariosControlador();
		$borrar -> BorrarUsuario();

		?>

	</div>

</div>