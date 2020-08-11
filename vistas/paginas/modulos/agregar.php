<!-- Barra Lateral -->

<div class="col-md-3 border-rigth">

	<div class="sticky-top">

		<div class="container mx-auto pt-3">

			<!-- Formulario para Crear Usuario -->

			<form method="post" role="form" enctype="multipart/form-data">

				<div class="form-group image-upload text-center">
					<label for="file-input">
						<img src="vistas/img/img-upload.png" id="image_upload_preview" class="w-75" />
					</label>
					<input id="file-input" type="file" class="form-control form-control-file" name="inp-imagen">
				</div>

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="inp-nombre" required>
				</div>

				<div class="form-group">
					<label>Correo Electrónico</label>
					<input type="email" class="form-control" name="inp-email" required>
				</div>

				<div class="form-group">
					<label>Bio</label>
					<textarea class="form-control" rows="3" name="inp-bio" required></textarea>
				</div>

				<div class="text-center py-4">
					<button type="submit" class="btn btn-primary px-5 py-2 shadow-sm">Agregar Usuario</button>
				</div>

				<?php 
				$add = new UsuariosControlador();
				$add -> AgregarUsuario();
				?>

			</form>

		</div>

	</div>

</div>