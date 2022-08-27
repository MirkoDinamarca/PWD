<?php

require '../../../includes/functions.php';
incluirTemplate('header');

?>
<style>
    .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.form {
  width: 450px;
}
.btn{
  background-color:pink;
  border-color:pink;
}
</style>
</head>
<body>

<div class="container">
  <div class="abs-center">
    <form  class="border p-3 form row g-3 needs-validation" novalidate iid="form1" name="form1" method="get" action="../control/cargaHoraria.php">
    <h3>CARGA HORARIA</h3>  
      <div class="form-group">
      <label class="form-label">Lunes</label>
      <input  class="form-control" name="lunes" type="text" id="lunes"  required>
        <div  class="invalid-feedback">
          Ingrese la carga horaria del lunes
        </div>
        <label class="form-label">Martes</label>
      <input  class="form-control" name="martes" type="text" id="martes"  required>
        <div  class="invalid-feedback">
          Ingrese la carga horaria del martes
        </div>

        <label class="form-label">Miercoles</label>
      <input  class="form-control" name="miercoles" type="text" id="miercoles"  required>
        <div  class="invalid-feedback">
          Ingrese la carga horaria del miercoles
        </div>

        <label class="form-label">Jueves</label>
      <input  class="form-control" name="jueves" type="text" id="jueves"  required>
        <div  class="invalid-feedback">
          Ingrese la carga horaria del jueves
        </div>

        <label class="form-label">Viernes</label>
      <input  class="form-control" name="viernes" type="text" id="viernes"  required>
        <div  class="invalid-feedback">
          Ingrese la carga horaria del viernes
        </div>

      <br>
      <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
    </form>
  </div>
</div>
  

<!--VALIDACION DE FORMULARIO -->
<script>
    // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
(function () {
  'use strict'

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll('.needs-validation')

  // Bucle sobre ellos y evitar el envío
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
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