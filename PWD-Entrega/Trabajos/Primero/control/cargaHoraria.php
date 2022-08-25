<html>
<head>
<title>datosPersonales</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>



<?php
if ($_GET){

    $semana = [
        $_GET['lunes'], 
        $_GET['martes'], 
        $_GET['miercoles'], 
        $_GET['jueves'], 
        $_GET['viernes']];
 
    
    $cargaHoraria = 0;
        for ($i = 0; $i < count($semana); $i++) {
            $cargaHoraria += $semana[$i];
        }
        $resultado = "La carga horaria semanal es de: " . $cargaHoraria."hs";
    } else {
        $resultado= "no se ingresaron datos";
    }
?>

<h3><?php echo $resultado?></h3>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>


