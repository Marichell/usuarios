<!--  USUARIOS REGISTRADOS -->
<div class="col-md-9 bg-light">

	<div class="container">

		<div class="row">

			<?php 
			$ver = new UsuariosControlador();
			$respuesta = $ver -> VerUsuarios();
			?>

			<!-- VER A LOS USUARIOS -->

			<?php foreach ($respuesta as $key => $value): ?>

				<div class="col-12 col-md-4 mt-5">
					<div class="card shadow border-top ">

						<!-- imagen -->

						<div class="text-center py-3">

							<?php if ($value["imagen"]==null): ?>

								<img class="card-img-top img-fluid w-50 shadow-sm rounded-circle" src="vistas/img/img-upload.png" alt="imagen usuario">

								<?php else: ?>

									<img class="card-img-top img-fluid w-50 shadow-sm rounded-circle" src="<?php echo $value["imagen"]; ?>" alt="<?php echo $value["nombre"]; ?>">

								<?php endif ?>

							</div>

							<div class="card-body text-center">
								<h5 class="card-title"><?php echo $value["nombre"]; ?></h5>
								<p class="text-muted small"><?php echo $value["email"]; ?></p>
								<p class="card-text small text-left"><?php echo $value["bio"]; ?></p>
							</div>
							<div class=" btn-float">
								<button type="" class="btn btn-warning btn-sm rounded-circle mb-2 editar" editarID="<?php echo $value["id"]; ?>" data-toggle="modal" data-target="#editModal"><i class="far fa-edit"></i></button>
								<button type="" class="btn btn-danger btn-sm rounded-circle borrar" borrarID="<?php echo $value["id"]; ?>" borrarImagen="<?php echo $value["imagen"]; ?>"><i class="far fa-times-circle"></i></button>
							</div>
						</div>
					</div>

				<?php endforeach ?>

			</div>

		</div>

	</div>