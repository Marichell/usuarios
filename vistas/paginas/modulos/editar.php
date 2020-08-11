<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
	
	<div class="modal-dialog modal-dialog-centered" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<h5 class="modal-title">Editar Usuario</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>

			<div class="modal-body">
				
				<div class="container">

					<!-- Formulario para Actualizar Usuario -->

					<form method="post" role="form" enctype="multipart/form-data">

						<input type="hidden" id="editarID" name="editarID">

						<div class="row">
							<div class="col-md-4">
								<img src="vistas/img/img-upload.png" class="img-fluid visor" alt="">
								<input type="hidden" id="imagenActual" name="imagenActual">
							</div>

							<div class="col-md-8">
								<div class="row">
									
									<div class="col-12">
										<div class="form-group">
											<label>Foto</label>
											<input type="file" class="form-control-file" name="editar-imagen">
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Nombre</label>
											<input type="text" class="form-control" name="editar-nombre" id="id-nombre" required>
										</div>
									</div>
									
									<div class="col-12">
										<div class="form-group">
											<label>Correo Electrónico</label>
											<input type="email" class="form-control" name="editar-email" id="id-email" required>
										</div>
									</div>

								</div>

							</div>
						</div>

						<div class="form-group">
							<label>Bio</label>
							<textarea class="form-control" rows="3" name="editar-bio" id="id-bio" required></textarea>
						</div>

						<div class="text-center py-4">
							<button type="submit" class="btn btn-primary px-5 py-2 shadow-sm">Editar Usuario</button>
						</div>

						<?php 
						$editar = new UsuariosControlador();
						$editar -> EditarUsuario();
						?>

					</form>

				</div>

			</div>
			
		</div>
		
	</div>

</div>