


<?php


// Inicia la seccion y luego la destruye
    session_start();
    header("location: user.php");
    session_unset();
    session_destroy();
// Reedireciona y envia otro archivo
    exit();

?>