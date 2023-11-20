<?php

include("../db.php");

if(isset($_GET['id'])) {

$id = $_GET['id']; $query = "DELETE FROM usuarios WHERE id = $id"; $result = mysqli_query($conn, $query);

if(!$result) { die("Error de Consulta");

}

$_SESSION['message'] = 'Usuario Eliminado Exitosamente'; $_SESSION['message_type'] = 'Peligro'; header('Location: index.php'); }

?>