<?php

require '../../../includes/functions.php';
incluirTemplate('header');

?>
<style>
    .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 30vh;
}


.container{
  padding:10px;
}
.btn{
  background-color:black;
  border-color:white;
}
.btn .hover{
  background-color:pink;
  border-color:pink;
}
h3{
  font-weight: 900;
}
</style>
</head>
<body>
  <div class="container">
    <div class="abs-center">
    <form class="row g-4 needs-validation" novalidate id="form1" name="form1" method="get" action="../control/datosPersonales.php">
     
        <h3>DATOS PERSONALES</h3>  
        <div class="input-control">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre_form" id="nombre_form" required>
            <div class="invalid-feedback">
              Ingrese un nombre
            </div>
        </div>
        <div class="input-control">
            <label>Apellido</label>
            <input type="text" class="form-control" name="apellido_form" id="apellido_form" required >
            <div class="invalid-feedback">
              Ingrese su apellido
            </div>
        </div>
        <div class="input-control">
            <label>Edad</label>
            <input type="text" class="form-control" name="edad_form" id="edad_form" required >
            <div class="invalid-feedback">
              Ingrese su edad
            </div>
        </div>
        <div class="input-control">
          <label>Dirección</label>
          <input type="text" class="form-control" name="direccion_form" id="direccion_form" required >
          <div class="invalid-feedback">
            Ingrese su dirección
          </div>
        </div>

        <div class="input-control">
          <label for="genero">Sexo</label>
            <select class="form-select " name="sexo_form" id="sexo_form" aria-label=".form-select-sm example" required>
              <option value="" selected>Seleccione</option>
              <option value="Femenino" >Femenino</option>
              <option value="Masculino">Masculino</option>
              <option value="Otro">Otro</option>
             
            </select>
            <div class="invalid-feedback">
              Ingrese su sexo
            </div>
        </div>

        <div class="input-control">
            <label>Nivel de estudio</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudio" id="estudio" value="No tiene estudios" required>
              <label class="form-check-label" for="inlineRadio1">No tiene estudios</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudio" id="estudio" value="Primario Completo" required>
              <label class="form-check-label" for="inlineRadio2">Primario Completo</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudio" id="estudio" value="Secundario Completo" required>
              <label class="form-check-label" for="inlineRadio3">Secundario Completo</label>
            </div>
            <div class="invalid-feedback">
              Seleccione su maximo nivel de estudios
            </div>
        </div>
         
       
        <div class="input-control">
            <label for="genero">Deporte que practica</label>
            <select class="form-select " name="deporte_form" id="deporte_form" aria-label=".form-select-sm example" required>
              <option value="" selected>Seleccione</option>
              <option value="Voley" >Voley</option>
              <option value="Basket">Basket</option>
              <option value="Futbol">Futbol</option>
              <option value="Tenis">Tenis</option>
            </select>
            <div class="invalid-feedback">
              Seleccione un deporte 
            </div>
        </div>

        <input type="submit" name="Submit" value="Aceptar" class="btn btn-primary" />

      </form>
    </div>
  </div>

<!--VALIDACION DE FORMULARIO -->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<?php incluirTemplate('footer'); ?>