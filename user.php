<!-- Cabeza de pagina -->
<?php include_once("header.php"); ?>


<div class="container-fluid ">
    <div class="row justify-content-center mt-5">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="size-user" action="user_validador_d.php" method="post" onsubmit="return validater_user();">
                <div class="from-group section-title">
                    <h2><i class="icofont-waiter-alt"> login</i></h2>
                </div>
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" placeholder="&#x1f600; Usuario" class="form-control" id="user_user" name="user_user" require autofocus>
                </div>
                <div class="form-group">
                    
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="&#128272; Contraseña" class="form-control" id="user_password" name="user_password" require> 
                    <!-- Muestra un mensaje -->
                    <small id="mensaje" class="form-text text-muted">¡Por favor! no comparta tus datos con nadie.</small>
                </div>
                <input type="submit" id="user_enviar" name="user_enviar" class="btn btn-primary btn-block" 
                value="&#x1f4e5; Enviar">
            </form>
        </section>
    </div>
</div>





<!-- Pie de pagina -->
<?php include_once("footer.php"); ?>
