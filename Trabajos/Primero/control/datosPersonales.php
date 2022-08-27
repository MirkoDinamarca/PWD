<html>
<head>
<title>datosPersonales</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    h3{
  font-weight: 900;
}
p{
    font-weight: 200;
    position:center;
}
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;

}
</style>
<body>


<?php
    if ($_GET){
        $nombre = $_GET['nombre_form'] ;
        $apellido = $_GET['apellido_form'] ;
        $edad = $_GET['edad_form'];
        $direccion = $_GET['direccion_form'];
        $estudio = $_GET['estudio'];
        $sexo= $_GET['sexo_form'];
        $deporte= $_GET['deporte_form'];

        if($edad > 18){
            //REDIRECCIONAR -> header ('Location: '.'mayorEdad.php');
            $mayor="sos mayor de edad";
            

        }if($edad < 18){
            $mayor="sos menor de edad";
        }
    }else{
        echo "No se recibieron datos<br />";
    }
?>

<div class="container">
    <div class="abs-center">
    


    <p><?php echo "$mayor <br>
                NOMBRE: $nombre<br>
                APELLIDO: $apellido<br>
                EDAD:$edad<br>
                DIRECCIÓN:$direccion<br>
                ESTUDIO:$estudio<br>
                SEXO:$sexo<br>
                DEPORTE QUE PRACTICA:$deporte<br>"
        ?>

    </p>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>