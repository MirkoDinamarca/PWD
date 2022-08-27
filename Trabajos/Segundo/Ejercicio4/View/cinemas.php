<?php

require '../../../../includes/functions.php';
incluirTemplate('header');

?>
    <style>
        label {

            font-weight: bold;
        }

        .error {
            color: red;
            font-style: italic;
        }
    </style>

    <div class="m-0 vh-100 row justify-content-center align-items-center" style="background-color: gray; box-shadow: 5px 10px #888888;">

        <div class="col-xs-12 col-md-10" style="background-color: #ede9e8; padding: 20px; border-radius: 4px;">
            <div class="card-header" style="font-weight: bold; margin-bottom: 5px; text-align: center;">
                <h1><b>CINEM@S</b></h1>
            </div>
            <div>
                <form id="form-cine" class="needs-validation" novalidate action="../Controller/des-pelicula.php" method="POST" enctype="multipart/form-data">

                    <div class="card-body">

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="titulo-pelicula">Titulo</label>
                                <input name="titulo-pelicula" id="titulo-pelicula" type="text" placeholder="Ingrese el título" class="form-control inputs" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="actor-pelicula">Actores</label>
                                <input name="actor-pelicula" id="actor-pelicula" type="text" placeholder="Ingrese los actores" class="form-control inputs" required>

                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="director-pelicula">Director</label>
                                <input required name="director-pelicula" id="director-pelicula" type="text" placeholder="Ingrese el director" class="form-control inputs">

                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="guion-pelicula">Guion</label>
                                <input required name="guion-pelicula" id="guion-pelicula" type="text" placeholder="Ingrese el guión" class="form-control inputs">

                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="produccion-pelicula">Produccion</label>
                                <input required name="produccion-pelicula" id="produccion-pelicula" type="text" placeholder="Ingrese la producción" class="form-control inputs">

                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="anio-pelicula">Año</label>
                                <input required name="anio-pelicula" id="anio-pelicula" type="number" max=9999 class="form-control inputs">

                                <div class="invalid-feedback">
                                    Este campo es obligatorio y debe tener un máximo de 4 caracteres
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="negrita" for="genero">Género</label>
                                <select class="form-select" name="genero" id="genero" required>
                                    <option selected disabled value="">-- Seleccione --</option>
                                    <option value="Comedia">Comedia</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Terror">Terror</option>
                                    <option value="Romanticas">Románticas</option>
                                    <option value="Suspenso">Suspenso</option>
                                </select>

                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nacionalidad-pelicula">Nacionalidad</label>
                                <input required name="nacionalidad-pelicula" id="nacionalidad-pelicula" type="text" class="form-control inputs">

                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">


                            <div class="form-group col-md-6">
                                <label for="duracion-pelicula">Duracion</label>
                                <input required name="duracion-pelicula" id="duracion-pelicula" type="number" max=999 class="form-control inputs">
                                <small>(Minutos)</small>

                                <div class="invalid-feedback">
                                    Este campo es obligatorio y debe tener un máximo de 3 caracteres
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="edad">Restricciones de edad</label><br>

                                <input required type="radio" name="edad" id="radiobtn" value="Todo Publico" class="inputs" required>
                                <label style="font-weight:400;" for="todoPublico">Todo Publico</label>

                                <input required type="radio" name="edad" id="radiobtn" value="Mayores a 7 años" class="inputs" required>
                                <label style="font-weight:400;" for="mayor7">Mayores a 7 años</label>

                                <input required type="radio" name="edad" id="radiobtn" value="Mayores de 18 años" class="inputs" required>
                                <label style="font-weight:400;" for="mayor18">Mayores de 18 años</label>
                                <div class="invalid-feedback">
                                    Debe seleccionar al menos una opción
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="sinopsis-pelicula">Sinopsis</label>
                            <div class="col-xs-12 col-md-6">
                                <textarea class="form-control inputs" name="sinopsis-pelicula" id="sinopsis-pelicula" cols="30" rows="3" required></textarea>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="">Portada Imagen</label> 
                                <div style="margin-top: 10px;">
                                    <input type="file" name="imagen" class="form-control inputs" accept="image/png, .jpeg, .jpg">
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="d-flex justify-content-end gap-3" style="margin-top: 10px;">
                        <input required class="btn btn-primary " id="btnSubmit" type="submit" value="Enviar">
                        <input required class="btn btn-light" id="borrar" type="button" value="Borrar">
                    </div>

                </form>

            </div>
        </div>

    </div>
    </div>

    <script>
        // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
        (function() {
            'use strict'

            // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
            var forms = document.querySelectorAll('.needs-validation')

            // Bucle sobre ellos y evitar el envío
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        const borrar = document.getElementById('borrar');
        const inputs = document.querySelectorAll('.inputs');
        const selector = document.getElementById('genero');
        const btnRadios = document.getElementsByName("edad");


        borrar.addEventListener('click', function() {
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
            }

            for (let j = 0; j < btnRadios.length; j++) {
                btnRadios[j].checked = false;

            }
            selector.value = '';
        });
    </script>
<?php incluirTemplate('footer'); ?>