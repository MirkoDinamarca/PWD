<html>
<head>
<title>ejercicio7</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;

}
</style>
</head>
<body>

<?php
    if ($_POST){
        $num1 = $_POST['numero1_form'] ?? '';
        $num2 = $_POST['numero2_form'] ?? '';
        $operacion = $_POST['operaciones_form'];
      
        
     if(is_numeric($num1) && is_numeric($num2) && $operacion != ''){
        if( $operacion == "suma"){
            //REDIRECCIONAR -> header ('Location: '.'mayorEdad.php');
            $resultado = $num1 + $num2 ;
        }if($operacion == "resta"){
            $resultado = $num1 - $num2 ;
        }if($operacion == "multiplicacion"){
            $resultado = $num1 * $num2 ;
        }

       

     }else{
       echo " ERROR no es un numero";
     }
       
    }else{
     echo "ERROR No se recibieron datos<br />";
    }
        
    
?>
<div class="container">
<div class="abs-center">
<div class="alert alert-info" role="alert">
<h1><?php echo "El resultado de la $operacion es $resultado" ?></h1>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>