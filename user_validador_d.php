<?php



// Conectar base datos
require_once ("conexion.php");

$user= $_POST['user_user'];
$pass= $_POST['user_password'];


// Consultar tabla 
$consulta="SELECT * FROM usuario WHERE username= '$user' AND password='$pass'";
// Ejecutar la consulta
$resultado= mysqli_query($conn,$consulta);

// mysqli_num_rows= Permite obtener el resultado si coincide.
$filas=mysqli_num_rows($resultado);

// Condicion para validar
if($filas>0){
    if ($_POST['pass']) {
        echo 'La contraseña de verificación no coincide.';
     }else{
        session_start();
        $_SESSION['user']= $user;
        header("location: formulario.php");
     }
   
    
}else if(!empty($pass)){
    header("location: user.php");
}

if ($_POST['pass'] != $_POST['pass2']) {
    echo 'La contraseña de verificación no coincide.';
 } else {
    //Obtienes los datos de tus inputs.
 }


// Liberacion de memoeria
mysqli_free_result($resultado);
mysqli_close($conn);

include_once ("footer.php");
?>
