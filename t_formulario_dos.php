
<div class="container ">
    <table class="table size-table">
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
                try {
                    include_once('conexion.php');
                    $sql = "SELECT * FROM formulario";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $rowlistar =  
                        "<tr>
                            <td>{$row['id_formulario']}  </td>
                            <td>{$row['fecha']}          </td>
                            <td>{$row['nombre']}         </td>
                            <td>{$row['email']}          </td>
                            <td>{$row['numero']}         </td>
                            <td>{$row['dirrecion']}      </td>
                            <td>{$row['ciudad']}         </td>
                            <td>{$row['servicio']}       </td>
                            <td>{$row['mensaje']}        </td>
                       </tr>";
                            echo $rowlistar;
                        }
                    }
                } catch (exception $ex) {
                    echo $ex;
                }
                ?>
            </tbody>
        </div>
    </table>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<div class="container mt-2">
    <div class="row justify-content-end size-table-boton">
        <div class="mr-5 col-md-1 col-sm-3">
            <form action="user_salir.php" method="post"><input type="submit" class="btn btn-dark" id="salir" name="salir" value="Cerrar Sesión"></form>
        </div>
        <div class="mr-5 col-md-1 col-sm-3">
            <form action=user.php" method="post"><input type="submit" class="btn btn-dark" id="descargar" name="descargar"
            value="Descargar Excel"></form>
        </div>
    </div>
</div>


<?php include_once("menu.php");?>