<html>
<head>
<title>verNumero</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<a href="../vista/ejer1.php">VOLVER</a>
<?php

if ($_POST){
        $numero = $_POST['numero_form'] ;

     if(is_numeric($numero)){
        if($numero > 0){
            echo "<p>EL NUMERO INGRESADO ES: positivo </p><br />";
        }if($numero == 0){
            echo "<p>EL NUMERO INGRESADO ES: cero </p><br />";
        }
        if($numero < 0){
            echo "<p>EL NUMERO INGRESADO ES: negativo </p><br />";
        }
     }else{
        echo"no es un numero";
     }
       
    }else{
    echo "No se recibieron datos<br />";
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>