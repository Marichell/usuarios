<?php 


 //ALERTA: TODO SALIÓ BIEN
//--------------------------------------------	

function exitoMSG($url){
	echo "
	<script>
	Swal.fire({
		type: 'success',
		showConfirmButton: false,
		timer: 2000
		})
		.then(function() {
			window.location = '".$url."';
			});
			</script>
			";
		}

 //ALERTA: HUBO UN ERROR
//--------------------------------------------	

		function errorMSG($url){
			echo "
			<script>
			Swal.fire({
				type: 'error',
				title: 'Ops...',
				text: 'Algo salió mal, vuelve a intentarlo',
				showConfirmButton: true,
				})
				.then(function() {
					window.location = '".$url."';
					});
					</script>
					";
				}


//FUNCIÓN PARA SUBIR UNA IMAGEN AL DIRECTORIO 
//Y CREARLE UN NOMBRE
//--------------------------------------------	

				function subirImagen($InputImage){
					$rutaImg = "";

					if (isset($_FILES[$InputImage]["tmp_name"]) &&  !empty($_FILES[$InputImage]["tmp_name"])) {
        //imagen jpg
						if ($_FILES[$InputImage]["type"] == "image/jpeg") {
							$nombreImagen = mt_rand(10,999);
							$rutaImg = "vistas/img/user".$nombreImagen.".jpg";
							$imagen = imagecreatefromjpeg($_FILES[$InputImage]["tmp_name"]);
							$imagen = imagescale($imagen, 500, 500);
							imagejpeg($imagen, $rutaImg);
						}
        //imagen png
						if ($_FILES[$InputImage]["type"] == "image/png") {
							$nombreImagen = mt_rand(10,999);
							$rutaImg = "vistas/img/user".$nombreImagen.".png";
							$_backgroundColour='0,0,0';
							$imagen = imagecreatefrompng($_FILES[$InputImage]["tmp_name"]);
							$imagen = imagescale($imagen, 500, 500);
							$_backgroundColours = explode(',', $_backgroundColour);
							$_removeColour = imagecolorallocate($imagen, (int)$_backgroundColours[0], (int)$_backgroundColours[1], (int)$_backgroundColours[2]);
							imagecolortransparent($imagen, $_removeColour);
							imagesavealpha($imagen, true);
							$_transColor = imagecolorallocatealpha($imagen, 0, 0, 0, 127);
							imagefill($imagen, 0, 0, $_transColor);
							imagepng($imagen, $rutaImg);
						}
					}
					return $rutaImg;
				}


//FUNCIÓN PARA SUBIR UNA IMAGEN AL DIRECTORIO 
//CREARLE UN NOMBRE Y BORRAR LA IMAGEN ANTERIOR
//--------------------------------------------	

				function editarImagen($ImageActual, $InputImage){

					$rutaImg = $ImageActual;

					echo 'llego aqui';

					if (isset($_FILES[$InputImage]["tmp_name"]) &&  !empty($_FILES[$InputImage]["tmp_name"])) {
						if (!empty($ImageActual)) {
							unlink($ImageActual);

							echo 'entro al directorio';
						}else{
							mkdir($directorio, 0755);
						}
						if ($_FILES[$InputImage]["type"] == "image/jpeg"){
							$nombreImagen = mt_rand(10,999);
							$rutaImg = "vistas/img/user".$nombreImagen.".jpg";
							$imagen = imagecreatefromjpeg($_FILES[$InputImage]["tmp_name"]);
							$imagen = imagescale($imagen, 500, 500);
							imagejpeg($imagen, $rutaImg);
						}
						if ($_FILES[$InputImage]["type"] == "image/png") {
							$nombreImagen = mt_rand(10,999);
							$rutaImg = "vistas/img/user".$nombreImagen.".png";
							$_backgroundColour='0,0,0';
							$imagen = imagecreatefrompng($_FILES[$InputImage]["tmp_name"]);
							$imagen = imagescale($imagen, 500, 500);
							$_backgroundColours = explode(',', $_backgroundColour);
							$_removeColour = imagecolorallocate($imagen, (int)$_backgroundColours[0], (int)$_backgroundColours[1], (int)$_backgroundColours[2]);
							imagecolortransparent($imagen, $_removeColour);
							imagesavealpha($imagen, true);
							$_transColor = imagecolorallocatealpha($imagen, 0, 0, 0, 127);
							imagefill($imagen, 0, 0, $_transColor);
							imagepng($imagen, $rutaImg);
						}
					}
					return $rutaImg;
				}
