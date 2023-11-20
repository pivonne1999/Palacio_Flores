<?php include("../db.php"); ?>
<?php
include('../sesion.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<meta name="description" content="Buscar datos en tiempo real con PHP, MySQL y AJAX">
	<title>Palacio de las Flores</title>
	<link rel="icon" href="../../../imagenes/logo_floristeria.png" type="image/x-icon">		<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="../../css/linearicons.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/themify-icons.css">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/owl.carousel.css">
	<link rel="stylesheet" href="../../css/nice-select.css">
	<link rel="stylesheet" href="../../css/nouislider.min.css">
	<link rel="stylesheet" href="../../css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="../../css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="../../css/magnific-popup.css">
	<link rel="stylesheet" href="../../css/main.css">
</head>

<body style="background-image: url('floristeria.jpeg'); background-repeat: repeat; background-size: 100%;">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>

							<li class="nav-item"><a class="nav-link" href="../usuario/index.php">Nuevo Usuario</a></li>

							<li class="nav-item active"><a class="nav-link" href="index.php">Nuevo Producto</a></li>

							<li class="nav-item"><a class="nav-link" href="../cerrar_sesion/logout.php">Cerrar Sesión</a></li>
						</ul></a></li>
						</ul>

					</div>
				</div>
			</nav>
		</div>

	</header>
	<br><br><br><br>
	<!-- fin de header-->
	<main class="container p-4">

		<center>
			<div class="col-md-4">

				<!-- ADD TASK FORM -->
				<div class="container">
					<div class="row">
						<div class="col-md-16">
							<div class="card" style="text-align: left;">
								<div class="card-header">
									Datos del Producto
								</div>
								<div class="card-body">
									<form action="save.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Desea crear');">
										<div class="mb-3">
											<label for="txtnombre" class="form-label">Nombre</label>
											<input type="text" class="form-control" name="txtnombre" id="txtnombre" aria-describedby="helpId" placeholder="Escriba el nombre del producto" required>

										</div>
										<div class="mb-3">
											<label for="txtimagen" class="form-label">Imagen</label>
											<input type="file" class="form-control" name="txtimagen" id="txtimagen" aria-describedby="helpId" placeholder="Seleccione la imagen" accept="image/png,image/jpg" required>

										</div>

										<div class="mb-3">
											<label for="txtespecificacion" class="form-label">Especificaciones</label>
											<input type="text" class="form-control" name="txtespecificacion" id="txtespecificacion" aria-describedby="helpId" placeholder="Escriba la especificaciones del tema" required>

										</div>
										
											<div class="mb-5">
												<label for="txtcategoria" class="form-label">Categoria</label><br>
												<select class="form-control" name="txtcategoria" id="txtcategoria" required>
												<option value="bouquet">BOUQUET</option>
												<option value="ramo caja">RAMO EN CAJA</option>
												<option value="ramo base">RAMO EN BASE</option>
												<option value="ramo funebre">RAMOS FUNEBRES</option>
												<option value="ramo artificial">RAMOS ARTIFICIALES</option>
												<option value="servicio corte">SERVICIO DE CORTE</option>
												<option value="arreglo vehiculo">ARREGLO DE VEHÍCULOS</option>
												<option value="eventos">EVENTOS</option>
												</select>
											</div>
											<br>
											<hr>
											<center>
												<input type="hidden" name="save_task" value="1">
												<button type="submit" class="btn btn-primary">Agregar</button>
											</center>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</center>


	</main>


	<!-- End footer Area -->
	<script src="../../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../../js/vendor/bootstrap.min.js"></script>
	<script src="../../js/jquery.ajaxchimp.min.js"></script>
	<script src="../../js/jquery.nice-select.min.js"></script>
	<script src="../../js/jquery.sticky.js"></script>
	<script src="../../js/nouislider.min.js"></script>
	<script src="../../js/countdown.js"></script>
	<script src="../../js/jquery.magnific-popup.min.js"></script>
	<script src="../../js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../../js/gmaps.min.js"></script>
	<script src="../../js/main.js"></script>
	<script>
	const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get('message');

        // Mostrar un mensaje emergente si existe un mensaje
        if (message) {
            alert(message);
        }
    </script>
</body>

</html>