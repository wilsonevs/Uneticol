<?php include_once ("header.php");?>



<section class="container-fluid size-table">
<div class="row justify-content-center">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Dirreción</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Servicio</th>
                <th scope="col-5">Mensaje</th>
                <th scope="col-5">Fecha</th>
            </tr>
        </thead>

<?php 
$inc= include ("conexion.php");
if($inc){
    $consulta=" SELECT * FROM uneticol.formulario";
    $resultado= mysqli_query($con, $consulta);
    if($resultado){
        while($row= $resultado->fetch_array()){
            $id_formulario=     $row['id_formulario'];
            $nombre=            $row['nombre'];
            $email=             $row['email'];
            $numero=            $row['numero'];
            $dirrecion=         $row['dirrecion'];
            $ciudad=            $row['ciudad'];
            $servicio=          $row['servicio'];
            $mensaje=           $row['mensaje'];
            $fecha=             $row['fecha'];            
 
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $id_formulario?></th>
                    <td><?php echo $nombre?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $numero?></td>
                    <td><?php echo $dirrecion?></td>
                    <td><?php echo $ciudad?></td>
                    <td><?php echo $servicio?></td>
                    <td><?php echo $mensaje?></td>
                    <td><?php echo $fecha?></td>
                </tr>
            </tbody>

            <?php
                }
            }
        }
        
?>
    </table>
</div>
</section>

<div class="container mt-2">
    <div class="row justify-content-end size-table-boton">
        <div class="mr-2 col-md-1 col-sm-3">
            <form action="user.php" method="post"><input type="submit" class="btn btn-dark" id="regresar" name="regresar" value="Regresar"></form>
        </div>
        <div class="col-md-1 col-sm-3">
            <form action=user.php" method="post"><input type="submit" class="btn btn-dark" id="descargar" name="descargar"
            value="Descargar Excel"></form>
        </div>
    </div>
</div>

<?php include_once ("footer.php");?>

