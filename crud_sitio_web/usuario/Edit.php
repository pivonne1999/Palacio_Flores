<?php
include("../db.php");
include('../sesion.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM usuarios WHERE id=$id";
	/* La línea `  = mysqli_query(,);` está ejecutando la consulta SQL especificada en la
variable `` usando la función `mysqli_query()`. Está pasando la conexión a la base de datos
`` y la consulta como parámetros. El resultado de la consulta se almacena en la variable
``. */
	$result = mysqli_query($conn, $query);
	/* La línea `if(mysqli_num_rows()==1){` verifica si el resultado de la consulta tiene
    exactamente una fila. Si lo hace, significa que se encontró un registro con la ID especificada en
    la base de datos. */
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		$imagen = $row['foto'];
		$login = $row['login'];
		$contrasenia = $row['contrasenia'];
		$nombre = $row['nombre'];
		$apellido = $row['apellido'];
		$correo = $row['correo'];
		$estado = $row['estado'];
	}
}

if (isset($_POST['save_task'])) {
	$id = $_POST['id'];
	$nombre = $_POST['txtnombre'];
	$apellido = $_POST['txtapellido'];
	$imagen = $_FILES['txtimagen']['tmp_name'];
	$imagencontenido = addslashes(file_get_contents($imagen));
	$login = $_POST['txtlogin'];
	$contrasenia = sha1($_POST['txtcontrasenia']);
	$correo = $_POST['txtcorreo'];
	$fecha_modificacion = date("Y-m-d H:i:s");
	$query = "UPDATE usuarios set nombre='$nombre', apellido='$apellido', foto='$imagencontenido', login='$login',contrasenia='$contrasenia',correo='$correo', date_updated='$fecha_modificacion' WHERE id =$id";
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

							<li class="nav-item active"><a class="nav-link" href="../usuario/index.php">Nuevo Usuario</a></li>

							<li class="nav-item"><a class="nav-link" href="index.php">Nuevo Producto</a></li>

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
									<form action="edit.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Desea editar');">
										<div class="mb-3">
											<label for="txtnombre" class="form-label">Nombre</label>
											<input type="text" class="form-control" name="txtnombre" id="txtnombre" value="<?php echo $nombre; ?>" placeholder="Escriba el nombre del administrador" required>

										</div>
										<div class="mb-3">
											<label for="txtnombre" class="form-label">Apellido</label>
											<input type="text" class="form-control" name="txtapellido" id="txtapellido" value="<?php echo $apellido; ?>" placeholder="Escriba el apellido del administrador" required>

										</div>
										<div class="mb-3">
											<label for="txtimagen" class="form-label">Imagen</label>
											<input type="file" class="form-control" name="txtimagen" id="txtimagen" value="<?php echo $imagencontenido; ?>" placeholder="Seleccione la imagen" accept="image/png,image/jpg" required>

										</div>

										<div class="mb-3">
											<label for="txtespecificacion" class="form-label">login</label>
											<input type="text" class="form-control" name="txtlogin" id="txtlogin" value="<?php echo $login; ?>" placeholder="Escriba nombre de usuario" required>

											<div class="mb-3">
												<label for="txtnombre" class="form-label">Contraseña</label>
												<input type="text" class="form-control" name="txtcontrasenia" id="txtcontrasenia" value="<?php echo $contrasenia; ?>" placeholder="Escriba la contraseña del usuario" required>

											</div>
											<div class="mb-3">
												<label for="txtprecio" class="form-label">Correo</label>
												<input type="text" class="form-control" name="txtcorreo" id="txtcorreo" value="<?php echo $correo; ?>" placeholder="Escriba el correo del usuario" required>

												<hr>
												<center>
													<input type="hidden" name="save_task" value="1">
													<input type="hidden" name="id" value="<?php echo $id; ?>">
													<button type="submit" class="btn btn-primary">Editar</button>
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
