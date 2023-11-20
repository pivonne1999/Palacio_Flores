<?php 
 session_start();//iniciamos sesion
include("db.php");
if(!isset($_POST['user'])&& $_POST['user']!=""){
die('El usuario es obligatorio');
}
if(!isset($_POST['password'])&& $_POST['password']!=""){
    die('La contraseña es obligatoria');
    }
    $pass=sha1($_POST['password']);
    $user=$_POST['user'];
    $query="SELECT id FROM usuarios WHERE login='$user' AND contrasenia='$pass'";
    $result = mysqli_query($conn, $query);
    if($row=mysqli_fetch_assoc($result)){
       
        $user_id = $row['id'];//capturamos id ususario
        //Iniciamos sesion del usuario para validar el ingreso
        $_SESSION['usuario'] = $user_id;
        //Redifigimos hacia el index interno
        header('location: index.php');
    }
    else{

        session_destroy();//Eliminamos todas las sesiones 
        header('location: ../login.php?message=usuario o contraseña incorrecta');
    ?>
   
    <?php
    }
?>