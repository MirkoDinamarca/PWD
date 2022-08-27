<?php
require '../../../../includes/functions.php';
incluirTemplate('header')
?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5">

        <?php

        if (isset($_FILES)) {

            $ruta = '../uploads/';

            if (($_FILES['adjunto']['type'] == 'application/pdf' || $_FILES['adjunto']['type'] == 'application/msword') && $_FILES['adjunto']['size'] <= 2097152) { ?>
                <!--  2097152 = 2mb -->


                <?php if (copy($_FILES['adjunto']['tmp_name'], $ruta . $_FILES['adjunto']['name'])) { ?>

                <div class="card text-center">
                    <div class="card-header">
                        ¡El adjunto se cargó con éxito!
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Si desea ver el adjunto, haga click en el siguiente enlace</h5>
                        <a href="../uploads/<?= $_FILES['adjunto']['name'] ?>" class="btn btn-primary">Ver Adjunto</a>
                    </div>
                </div>

                <?php } ?>

            <?php } else { ?>

                <div class="card text-center">
                    <div class="card-header">
                        ¡El adjunto no se pudo cargar!
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Es probable que el archivo cargado no sea compatible</h5>
                    </div>
                </div>

        <?php }
        } ?>

    </div>
</div>

<?php incluirTemplate('footer') ?>