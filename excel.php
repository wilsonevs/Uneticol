<?php
    include_once("conexion.php");
    header('content-type application/vnd.ms-excel; charset=iso-8859-15 ');
    header('Content-Disposition: attachment; filename=contactos.xls');

try {
    $sql = "SELECT * FROM formulario";
    $result = $conn->query($sql);
} catch (exception $ex) {
    echo $ex;
}

?>

<div class="container-fluid" onsubmit="return validater_user();">
    <table border="1" cellpadding="2" cellspacing="0" width="100%">
        <div class="row">
        <div class="col-md-12>
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
        </div>
    </table>
</div>
