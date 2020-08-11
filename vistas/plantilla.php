<!doctype html>

<html lang="es">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="vistas/assets/vendor/Bootstrap/dist/css/bootstrap.css">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/3a9d286465.js" crossorigin="anonymous"></script>

	<!-- Sweet Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- Estilos Personalizados -->
	<link rel="stylesheet" href="vistas/assets/css/style.css">

	<title>CRUD Usuarios</title>

</head>

<body>


	<?php 
	if (isset($_GET["pagina"])) {
		if ($_GET["pagina"] == "usuarios") {
			include "paginas/".$_GET["pagina"].".php";
		}
	}
	else{
		include "paginas/usuarios.php";
	}
	?>



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

	<script src="vistas/assets/vendor/Bootstrap/dist/js/bootstrap.js"></script>

	<script src="vistas/assets/js/script.js"></script>

	<script src="vistas/assets/js/usuarios.js"></script>

</body>

</html>