<html>
<head>
<title>ejercicio8</title>
</head>
<body>
<a href="ejer8.php">VOLVER</a>
<h1>Cine Cinem@s</h1>
<?php
    if ($_POST){
        $nombre = $_POST['nombre_form'] ;
        $cantidad = $_POST['cantidad_form'] ;
        $edad = $_POST['edad_form'] ;
        $estudiante = $_POST['estudiante_form'];
      
//es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
//de 12 años el precio es de $180, en cualquier otro caso el precio es de $300
        
        if( $edad < 12 && $estudiante == "si" ){
  
            $resultado = $cantidad*160 ;

        }if($edad>=12 && $estudiante == "si"){
            $resultado = $cantidad*180 ;
        }if($estudiante == "no"){
            $resultado = $cantidad*300 ;
        }
            
        
        
    }else{
        echo "No se recibieron datos<br />";
    }
?>

<h1><?php echo "Hola $nombre!! <br>
El precio total es $resultado por la cantidad de $cantidad entradas" ?></h1>
<p>
</p>
</body>