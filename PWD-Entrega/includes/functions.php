<?php 

require 'app.php';

function incluirTemplate($nombre) {
    include TEMPLATES_URL . "/${nombre}.php"; // Concatenamos la URL de los templates en una constante
}

?>