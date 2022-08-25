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
    <form  class="border p-3 form row g-3 needs-validation" novalidate id="form1" name="form1" method="post" action="../control/operaciones.php">
      <div class="input-control">
        <label class="form-label">INGRESE UN NUMERO</label>
        <input name="numero1_form" class="form-control" type="text" id="numero1_form"> 
      </div>

      <div class="input-control">
        <label class="form-label">INGRESE UN NUMERO</label>
        <input name="numero2_form" class="form-control" type="text" id="numero2_form">
      </div>
      <div class="input-control">
      <label class="form-label">Seleccione  la operacion a realizar</label>
      
      <select class="form-control" id="operaciones_form" name="operaciones_form">
      <option selected>Seleccione</option>
        <option value="suma">SUMA</option>
        <option value="resta">RESTA</option>
        <option value="multiplicacion">MULTIPLICACION</option> 
      </select>
      </div>
      <button type="submit" class="btn btn-primary">Aceptar</button>
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