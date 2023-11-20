<?php
/*se asignan dos variables usuario y contraseña los cualos van a ser iguales al nombre que se les asigno
en el input que tenemos en el formulario login */
$usuario=$_POST['user'];
$password=$_POST['password'];

/*se incluye la conexion a la base de datos y se genera una consulta donde $usuario y $contrasenia deben 
coincidir con los campos especificados en la base de datos */
include("db.php");
$consulta="SELECT*FROM usuarios where login='$usuario' and contrasenia='$password'";
$resultado=mysqli_query($conn, $consulta);
$filas=mysqli_num_rows($resultado);
/*si los campos son correctos nos rediccionara a la parte del administrador de lo contrario
este nos devolvera al login */
if($filas ){
    header("location: index.php ");
}
else{
    header("location: ../login.html ");


}
?>