<?php
include("../db.php");
include('../sesion.php');
/* Este código verifica si el parámetro 'id' está configurado en la URL. Si está configurado, asigna el
valor del parámetro 'id' a la variable . Esto generalmente se usa para recuperar los detalles
específicos del producto de la base de datos en función del valor 'id' proporcionado. */
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	/* La línea ` = "SELECT * FROM productos WHERE id=";` está creando una consulta SQL para
    seleccionar todas las columnas (`*`) de la tabla `productos` donde la columna `id` coincide con el
    valor del variable ``. Esta consulta se utiliza para obtener los detalles de un producto
    específico de la base de datos. */
	$query = "SELECT * FROM productos WHERE id=$id";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		$nombre = $row['nombre'];
		$especificacion = $row['description'];
		$precio = $row['precio'];
		$imagen = $row['imagen_url'];
		$categoria = $row['categoria'];
		$estado = $row['estado'];
	}
}

if (isset($_POST['save_task'])) {
	$id = $_POST['id'];
	$nombre = $_POST['txtnombre'];
	$descripcion = $_POST['txtespecificacion'];
	$categoria = $_POST['txtcategoria'];
	$imagen = $_FILES['txtimagen']['tmp_name'];
	$imagencontenido = addslashes(file_get_contents($imagen));
	$fecha_modificacion = date("Y-m-d H:i:s");
	$query = "UPDATE productos set nombre='$nombre',description='$descripcion',imagen_url='$imagencontenido',categoria='$categoria',estado='$estado', date_updated='$fecha_modificacion' WHERE id =$id";
	mysqli_query($conn, $query);
	$_SESSION['message'] = 'productos Actualizado Con Exito';
	$_SESSION['message_type'] = 'warning';
	header('Location:index.php');
}
?>
<!--inicio de header-->
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
	<title>PEQUEÑOS MATEMÁTICOS</title>
	<link rel="icon" href="https://www.nicepng.com/png/full/826-8265848_orange-home-icons-for-website-logo-de-casa.png" type="image/x-icon">    
	
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
									<form action="edit.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Desea modificar');">
										<div class="mb-3">
											<label for="txtnombre" class="form-label">Nombre</label>
											<input type="text" class="form-control" name="txtnombre" id="txtnombre" value="<?php echo $nombre; ?>" placeholder="Escriba el nombre del producto" required>

										</div>
										<div class="mb-3">
											<label for="txtimagen" class="form-label">Imagen</label>
											<input type="file" class="form-control" name="txtimagen" id="txtimagen" aria-describedby="helpId" placeholder="Seleccione la imagen" accept="image/png,image/jpg" required>
										</div>

										<div class="mb-3">
											<label for="txtespecificacion" class="form-label">Especificaciones</label>
											<input type="text" class="form-control" name="txtespecificacion" id="txtespecificacion" value="<?php echo $especificacion; ?>" placeholder="Escriba la especificaciones del tema" required>

										</div>
									
											<div class="mb-3">
												<label for="txtcategoria" class="form-label">Categoria</label>
												<select class="form-control" name="txtcategoria" id="txtcategoria" required>
													<option value="bouquet" <?php echo $categoria == "bouquet" ? "selected" : ""; ?>>BOUQUET</option>
													<option value="ramo caja" <?php echo $categoria == "ramo caja" ? "selected" : ""; ?>>RAMO EN CAJA</option>
													<option value="ramo base" <?php echo $categoria == "ramo base" ? "selected" : ""; ?>>RAMO EN BASE</option>
													<option value="ramo funebre" <?php echo $categoria == "ramo funebre" ? "selected" : ""; ?>>RAMOS FUNEBRES</option>
													<option value="ramo artificial" <?php echo $categoria == "ramo artificial" ? "selected" : ""; ?>>RAMOS ARTIFICIALES</option>
													<option value="servicio corte" <?php echo $categoria == "servicio corte" ? "selected" : ""; ?>>SERVICIO DE CORTE</option>
													<option value="vehiculo" <?php echo $categoria == "vehiculo" ? "selected" : ""; ?>>ARREGLO DE VEHÍCULOS</option>
													<option value="eventos" <?php echo $categoria == "eventos" ? "selected" : ""; ?>>EVENTOS</option>
												</select>
											</div>
											<input type="hidden" name="save_task" value="1">
											<input type="hidden" name="id" value="<?php echo $id; ?>">
											<button type="submit" class="btn btn-primary">Editar</button>
									</form>

								</div>

	</main>

	<!-- start footer Area -->

	<!-- End footer Area -->