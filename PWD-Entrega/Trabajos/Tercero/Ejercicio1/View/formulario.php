<?php
require '../../../../includes/functions.php';
incluirTemplate('header')
?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" action="../Controller/Formulario.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <input type="file" name="adjunto" class="form-control">
            </div>

            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Enviar Archivo</button>
            </div>
        </form>
    </div>
</div>

<?php incluirTemplate('footer') ?>