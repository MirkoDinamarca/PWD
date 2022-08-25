<?php
require '../../../../includes/functions.php';
incluirTemplate('header')
?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5">

        <?php

        if (isset($_FILES)) {
            // echo '<pre>';
            // var_dump($_FILES);
            // echo '</pre>';

            $ruta = '../uploads/';



            if ($_FILES['img']['type'] == 'text/plain') { ?>

                <div class="card text-center">
                    <div class="card-header">
                        ¡El adjunto se cargó con éxito!
                    </div>


                    <?php

                    if (copy($_FILES['img']['tmp_name'], $ruta . $_FILES['img']['name'])) {
                        $path = '../uploads/' . $_FILES['img']['name'];
                        $data = file_get_contents($path);
                    ?>
                        <div class="card-body">
                            <h5 class="card-title">El contenido del archivo es el siguiente:</h5>
                            <textarea class="form-control" name="texto" id="texto" cols="30" rows="10">
                                <?= htmlspecialchars($data) ?>
                                </textarea>
                        </div>
                    <?php }  ?>

                </div>



            <?php } else { ?>

                <div class="card-header" style="font-weight: bold; margin-bottom: 5px; text-align: center;">
                    <h2><b>!El archivo no se pudo cargar!</b></h2> <br>
                    <h2><b>Asegurese de que el archivo sea pdf/doc | Tamaño permitido 2mb</b></h2>
                </div>

        <?php }
        } ?>

    </div>
</div>
<?php incluirTemplate('footer') ?>