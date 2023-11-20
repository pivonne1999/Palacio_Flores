<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Favicon-->
	<link rel=" icon" href="img/logo1.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Palacio de las Flores</title>
	<link rel="icon" href="../imagenes/logo_floristeria.png" type="image/x-icon">
		
</head>

<body>

	<!-- Start Header Area -->
	

	<head>
		<link rel="icon" href="imagenes/logo_floristeria.png" type="image/x-icon">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"/>
		<title>Palacio de las Flores</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
    	<body>
		  <header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-phone"></i>
						<div class="content-customer-support">
							<font size=3><span class="text"></span><br>
							<span class="number"></span></font>
						</div>
					</div>

					<div class="container-logo">
						<center><h1 class="logo"><a href="/">FLORISTERIA <br>EL PALACIO DE LAS FLORES</a></h1>
					</div>

					<div class="container-user">
						<a href="Facturacion/login.php">
						<i class="fa-solid fa-user"></i>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">CATÁLOGO</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="../catalogo/bouquet.php"><font color="#000000">BOUQUET</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/ramo_caja.php"><font color="#000000">RAMO EN CAJA</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/ramo_base.php"><font color="#000000">RAMO EN BASE</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/ramo_funebre.php"><font color="#000000">RAMO FUNEBRE</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/ramo_artificial.php"><font color="#000000">RAMOS ARTIFICIALES</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/servicio_corte.php"><font color="#000000">SERVICIO DE CORTE</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/vehiculos.php"><font color="#000000">ARREGLOS DE VEHÍCULOS</font></a></li>
						<li><a class="dropdown-item" href="../catalogo/eventos.php"><font color="#000000">EVENTOS</font></a></li>
					</ul>
					</li>
		
				<li><a href="../nosotros.php">ACERCA DE NOSOTROS</a></li>
						<li><a href="../contactos.php">CONTACTOS</a></li>
						<li><a href="../basedatos/login.php">INICIAR SESIÓN</a></li>

					</ul>

					
				</nav>
			</div>
			
			  
		</header>


		<section class="banner">
			<div class="content-banner">
				<h2>¡BIENVENIDOS! <br> A la sección de catálogos</h2>
			</div>
		</section>





	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1></h1>
					<h1></h1><h1></h1>
					<nav class="d-flex align-items-center">
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<center>
				<div class="col-xl-9 col-lg-8 col-md-7">
					<!-- Start Best Seller -->
					<section class="lattest-product-area pb-40 category-list">
						<div class="row">
							<br><br>
							<font face="arial" size=3><h1></h1></font>
						<!--Listado con php de los productos-->
							<?php
							include("db.php");
							$query = "SELECT * FROM productos WHERE categoria='ramo funebre'";
							$resultado1 = mysqli_query($conn, $query);
							/* El código anterior es un bucle de PHP que obtiene datos de una base de datos MySQL y los muestra como una cuadrícula de productos en una
								página web. Recupera cada fila de datos de la variable  y la muestra en una única división de producto. El código también incluye la imagen del producto, el nombre, el precio y un enlace
								"Ver más". */
							while ($row = mysqli_fetch_assoc($resultado1)) {
							?>
								<!-- single product -->
								<div class="col-lg-4 col-md-6">
									<div class="single-product">
										<img class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($row['imagen_url']); ?>" style="height: 450px; width: auto;">
										<div class="product-details">
											<h2><?php echo $row["nombre"]; ?></h2>
											<h2><?php echo $row["description"]; ?></h2>

											
											
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</section>
					<!-- End Best Seller -->
				</div>
		</div>
	</div>
	</center>


	<!-- End footer Area -->



	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>