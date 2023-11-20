<?php

include("../db.php");

if(isset($_GET['id'])) {

$id = $_GET['id']; $query = "DELETE FROM productos WHERE id = $id"; $result = mysqli_query($conn, $query);

if(!$result) { die("Error de Consulta");

}

$_SESSION['message'] = 'Producto Eliminado Exitosamente'; $_SESSION['message_type'] = 'Peligro'; header('Location: index.php'); }

?>