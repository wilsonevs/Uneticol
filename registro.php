<?php 

include_once ('conexion.php');

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $dirrecion = $_POST['dirrecion'];
    $ciudad = $_POST['ciudad'];
    $servicio = $_POST['servicio'];
    $mensaje = $_POST['mensaje'];
    date_default_timezone_set('America/Bogota');
    $fecha = date('Y-m-d H:i');

    try {
        $sql = "INSERT INTO formulario (nombre, email, numero, dirrecion, ciudad, servicio,mensaje, fecha) VALUES ('{$nombre}','{$email}','{$numero}','{$dirrecion}','{$ciudad}','{$servicio}','{$mensaje}','{$fecha}')";
        
        $resultado = $conn->query($sql);
                
        session_start();
        $_SESSION['res'] = 1;
        header("location:index.php");

    } catch (Exception $ex) {
        echo "DB connection error";
    }
}


?>