<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../src/js/jquery.js"></script>
    <script src="../../src/js/jquery.validate.min.js"></script>
    <script src="../../src/js/localization/messages_es.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">

    <title>Descripción Película</title>
</head>

<body>

    <div class="m-0 vh-100 row justify-content-center align-items-center">

        <div class="col-xs-12 col-md-6">

            <div class="card-body">

                <div style="background-color: #DFF0D8; color: #548855; padding: 20px; border-radius: 10px;">
                    <h1 style="color: #3180AE;">La película introducida es</h1>


                    <?php

                    if (isset($_FILES)) {


                        // echo '<pre>';
                        // var_dump($_FILES);
                        // echo '</pre>';

                        $ruta = '../uploads/';

                        if ($_FILES['imagen']['type'] == 'image/jpeg' || $_FILES['imagen']['type'] == 'image/jpg' || $_FILES['imagen']['type'] == 'image/png') { ?>

                            <?php

                            if (copy($_FILES['imagen']['tmp_name'], $ruta . $_FILES['imagen']['name'])) : ?>
                                <img src="../uploads/<?= $_FILES['imagen']['name'] ?>" alt="Ta chiquito" width="20%" style="border-radius: 10px;">

                            <?php endif; ?>

                        <?php } ?>
                    <?php } ?>

                    <p> <b>Titulo:</b> <?= $_POST['titulo-pelicula'] ?></p>
                    <p> <b>Actores:</b> <?= $_POST['actor-pelicula'] ?></p>
                    <p> <b>Director:</b> <?= $_POST['director-pelicula'] ?></p>
                    <p> <b>Guión:</b> <?= $_POST['guion-pelicula'] ?></p>
                    <p> <b>Producción:</b> <?= $_POST['produccion-pelicula'] ?></p>
                    <p> <b>Año:</b> <?= $_POST['anio-pelicula'] ?></p>
                    <p> <b>Genero:</b> <?= $_POST['genero'] ?></p>
                    <p> <b>Nacionalidad:</b> <?= $_POST['nacionalidad-pelicula'] ?></p>
                    <p> <b>Duración:</b> <?= $_POST['duracion-pelicula'] ?></p>
                    <p> <b>Restricciones de edad:</b> <?= $_POST['edad'] ?></p>
                </div>

            </div>

        </div>

    </div>

</body>

</html>