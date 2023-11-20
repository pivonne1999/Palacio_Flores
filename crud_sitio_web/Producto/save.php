<?php
include('../db.php');

if (isset($_POST['save_task'])) {
    $nombre = $_POST['txtnombre'];
    $descripcion = $_POST['txtespecificacion'];
    $categoria = $_POST['txtcategoria'];
    $imagen = $_FILES['txtimagen']['tmp_name'];
    $imagencontenido = addslashes(file_get_contents($imagen));

    // Consulta SQL para verificar si un producto similar ya existe por nombre
    $consulta = "SELECT * FROM productos WHERE nombre COLLATE UTF8MB4_GENERAL_CI = '$nombre'";
    $resultado = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Producto similar encontrado en la base de datos
        $mensaje = "Ya existe un tema con un nombre similar: $nombre";
        header('Location: crear.php?message=Ya existe un producto con un nombre similar');
        exit(); // Terminar el script
    } else {
        // El producto no existe, puedes continuar con la inserción
        $query = "INSERT INTO productos(nombre, description, categoria, imagen_url) VALUES ('$nombre', '$descripcion',  '$categoria', '$imagencontenido')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed.");
        }

        $mensaje = 'Información guardada exitosamente';
        header('Location: index.php?mensaje=' . $mensaje);
    }
}
?>
