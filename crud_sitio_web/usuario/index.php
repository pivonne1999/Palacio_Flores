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
	<link rel="icon" href="../../../imagenes/logo_floristeria.png" type="image/x-icon">
<!--
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

							<li class="nav-item active"><a class="nav-link" href="index.php">Nuevo Usuario</a></li>

							<li class="nav-item"><a class="nav-link" href="../Producto/index.php">Nuevo Producto</a></li>

							<li class="nav-item"><a class="nav-link" href="../cerrar_sesion/logout.php">Cerrar Sesión</a></li>
						</ul></a></li>
						</ul>

					</div>
				</div>
			</nav>
		</div>
	</header>
	<br><br><br><br><br>
	<center>
	
			<a href="crear.php">
			<button type="submit" value="submit" class="btn btn-primary">Agregar Nuevo Usuario</button>
			</a>
	
	</center>
	<hr>
	<div class="col-md-12">
		<table class="table table-bordered" style="background-color: #FFFFFF;">
			<thead>
				<tr>
					<center>
						<th>Id</th>
						<th>imagen</th>
						<th>Usuario</th>
						<th>Contraseña</th>
						<th>Nombre </th>
						<th>Apellido</th>
						<th>Correo</th>
						<th>Fecha de Creación</th>
						<th>Fecha de Actualización</th>
						<th>Acciones</th>
						<center />
				</tr>
			</thead>
			<tbody>

				<?php
				$query = "SELECT * FROM usuarios";
				$result_tasks = mysqli_query($conn, $query);

				while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td> <img src="data:image/png;base64,<?php echo base64_encode($row['foto']) ?>" style="max-height: 50px;"> </td>
						<td><?php echo $row['login']; ?></td>
						<td style="max-width: 75px; overflow: hidden; text-align: justify;"><?php echo $row['contrasenia']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellido']; ?></td>
						<td><?php echo $row['correo']; ?></td>
						<td><?php echo $row['date_created']; ?></td>
						<td><?php echo $row['date_updated']; ?></td>	
						<td>

							<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
								<i class="fas fa-marker"></i>
							</a>
							<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
								<i class="far fa-trash-alt"></i>
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	</div>

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
</body>

</html>