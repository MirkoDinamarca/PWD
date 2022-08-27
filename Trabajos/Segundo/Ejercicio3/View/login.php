<?php

require '../../../../includes/functions.php';
incluirTemplate('header');

?>

<style>
    .btn{
        background-color: rgb(77, 167, 137);
        color:white;
    }
    .fondo {
        -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.75);
    }
</style>

    <div class="m-0 vh-100 row justify-content-center align-items-center fondo" style="background-color: gray;">
      <div class="col-auto p-5 text-center fondo" style="background-color: white; border-radius: 10px;">
        <h2>Member Form</h2>
          <form class="row g-3 needs-validation" novalidate id="form1" name="form1" method="post" action="../Controller/verificaPass.php">
            <div class="input-group position-relative">
              
              <input type="text" class="form-control" id="user" name="user" placeholder="User" required>
              <div class="invalid-feedback">
                Ingrese un usuario valido
                
              </div>
            </div> 
            <div class="input-group position-relative"><br>
            
              <input  class="form-control" inputmode="verbatim" type="password" name="pass" id="pass"  placeholder="Password" required>
              <div class="invalid-feedback">
                Ingrese una contraseña valida
              </div>
            </div>
            <span id="passstrength"></span>
   
           
            
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Enviar formulario</button>
             
            </div>
       
          </form>
    </div>
  </div>
<!-- 
    <div class="m-0 vh-100 row justify-content-center align-items-center fondo" style="background-color: gray;">
        <div class="col-auto p-5 text-center fondo" style="background-color: white; border-radius: 10px;">
            <h2>Member Form</h2>
            <form class="needs-validation" id="form1" name="form1" method="post" action="verificaPass.php"  novalidate>
           <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    </span>
                    <input type="text" id="user" name="user" class="form-control is-valid" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" require>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Ingrese un usuario valido
                    </div>
            </div>  
<br>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg></span>
                <input type="text" class="form-control" type="password" name="password" id="password" placeholder="password" minlength="8" aria-label="Password" aria-describedby="basic-addon1">
            </div>   
            <br>
            <button type="submit" class="btn btn-success form-control">Login</button>
        </form>
        </div>
        
    </div>
    </div>
-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>

$('#pass').keyup(function(e) {
  let user = document.getElementById("user").value;
  let pass = document.getElementById("pass").value;
  let strongRegex = new RegExp(/^(?=.*\d)(?=.*[a-z]).{8,}$/);
   if (strongRegex.test($(this).val()) && pass != user) {
  
      $('#passstrength').className = 'ok';
            $('#passstrength').html('Fuerte!');
   
         
    
    } else {
            $('#passstrength').className = 'error';
            $('#passstrength').html('Debe ser mayor a 8 caracteres <br> Ser alfanumerica<br> No coincidir con el usuario ');
    }
    return true;
}); 

  
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