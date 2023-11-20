<?php

include('../db.php');
/*
echo"<pre>";
print_r($_POST);
die();
*/

if (isset($_POST['save_task'])) {
$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$login = $_POST['txtlogin'];
$contrasenia = $_POST['txtcontrasenia'];
$correo = $_POST['txtcorreo'];
$imagen=$_FILES['txtimagen'] ['tmp_name'];
$imagencontenido= "data:imagen/".pathinfo($imagen,PATHINFO_EXTENSION).";base64,".base64_encode(file_get_contents($imagen));

// Consulta SQL para verificar si un producto similar ya existe por nombre
$consulta = "SELECT * FROM usuarios WHERE login COLLATE UTF8MB4_GENERAL_CI = '$login'";
$resultado = mysqli_query($conn, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    // Producto similar encontrado en la base de datos
    $mensaje = "Ya existe un Usuario con un nombre similar: $nombre";
    header('Location: crear.php?message=Ya existe un usuario con un nombre similar');
    exit(); // Terminar el script
} else {


$query = "INSERT INTO usuarios(foto, login, contrasenia, nombre, apellido, correo) VALUES ('$imagencontenido', '$login', '$contrasenia', '$nombre', '$apellido', '$correo')";
$result = mysqli_query($conn, $query); 
if(!$result) { 
    die("Query Failed."); 
}

$mensaje= 'Informacion Guardada Exitosamente';
header('Location: index.php?mensaje='.$mensaje);

}
}

?>
