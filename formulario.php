<?php
include_once('conexion.php');
try {
    $sql = "SELECT * FROM formulario";
    $result = $conn->query($sql);
} catch (exception $ex) {
    echo $ex;
}
?>

<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: user.php');
    session_unset();
    session_destroy();
    exit;
}
?>

<div class="container-fluid ">
    <table id="myTable" class="table size-table">
        <div class="table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col-5">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Dirreción</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Servicio</th>
                    <th scope="col-5">Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    
                    while ($rows = $result->fetch_row()) {
                        echo "<tr>
                        <td>{$rows[0]}</td>
                        <td>{$rows[8]}</td>
                        <td>{$rows[1]}</td>
                        <td>{$rows[2]}</td>
                        <td>{$rows[3]}</td>
                        <td>{$rows[4]}</td>
                        <td>{$rows[5]}</td>
                        <td>{$rows[6]}</td>
                        <td>{$rows[7]}</td>
                </tr>";
                    }
                }
                ?>
            </tbody>
        </div>
    </table>
</div>

<ul class="pagination justify-content-center  pagination-lg pager" id="myPager"></ul>

<div class="row justify-content-center" role="group" aria-label="Basic example">
        <div class="col-4">
            <form action="user_salir.php" method="post"><input type="submit" class="btn btn-Warning btn-block"
            id="cerrar_sesion" name="cerrar_sesion" value="Cerrar Sesión"></form>
        </div>
        <div class="col-4">
            <form action="excel.php" method="post"><input type="submit" class="btn btn-dark btn-block" 
            id="descargar" name="descargar" value="Descargar Excel"></form>
        </div>
</div>


<?php include_once("menu.php");?>