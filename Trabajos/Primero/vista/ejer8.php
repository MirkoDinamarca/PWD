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
    <form  class="border p-3 form row g-3 needs-validation" novalidate id="form1" name="form1" method="post" action="../control/entradas.php">
      <div class="form-group">
      <label class="form-label">Nombre</label>
      <input  class="form-control" name="nombre_form" type="text" id="nombre_form" required>
        <div  class="invalid-feedback">
          Ingrese su nombre
        </div>
        <label class="form-label">Edad</label>
        <input  class="form-control" name="edad_form" type="text" id="edad_form" required>
        <div  class="invalid-feedback">
          Ingrese su edad
        </div>

        <label class="form-label">Cantidad de entradas</label>
        <input  class="form-control" name="cantidad_form" type="text" id="cantidad_form" required> 
        <div  class="invalid-feedback">
          Ingrese la cantidad de entradas
        </div>

      <label class="form-label">Estudiante</label>
      <select  class="form-control" id="estudiante_form" name="estudiante_form" required>
      <option value="" seleted>seleccione</option>
      <option value="si">si</option>
      <option value="no">no</option>
      </select>
        <div  class="invalid-feedback">
          Seleccione si es o no estudiante
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