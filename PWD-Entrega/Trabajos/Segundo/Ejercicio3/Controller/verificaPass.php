<?php

require '../../../../includes/functions.php';
incluirTemplate('header');

?>
<a href="../View/login.php">VOLVER</a>
<?php

if ($_POST){
        $usuario = $_POST['user'] ;
        $cont = $_POST['pass'] ;
        
        $usuarios = array(

          'user' => "agus",
          'password' => "agustina20",
         
        );
        if($usuario != $cont){

          if($usuario == $usuarios['user'] && $cont == $usuarios['password'] ){
            $respuesta ="Bienvenido!! Usuario correcto";
          }else{
            $respuesta="Usuario o contraseña incorrecta";
          }

        }else{
          $respuesta="el usuario no debe ser igual a la contraseña";
        }
          
    
      
      
      } 
else{
  echo "No se recibieron datos<br />";
}



?>
 
  <h1> <?php echo $respuesta?></h2>

  <?php incluirTemplate('footer'); ?>