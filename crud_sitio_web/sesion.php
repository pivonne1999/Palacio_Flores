<?php
session_start();//Inicializamos todas las sesiones
if(!isset($_SESSION['usuario'])){//Redireccionamos al formulario de ingreso en caso de que el usuario no exista;
    header('location: ../../login.php?message=Su sesión ha caducado');
 exit();//terminamos la ejecucion del código
}
?>