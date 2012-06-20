<?php

$nombre = (isset($_POST[nombre]) && $_POST[nombre] != '')?$_POST[nombre]:false;
$email = (isset($_POST[email]) && $_POST[email] != '')?$_POST[email]:false;

if($nombre && filter_var($email, FILTER_SANITIZE_EMAIL)){
    echo '<p class="alertas ok">Formulario enviado, gracias.</p>';
} else {
    echo '<p class="alertas fail">Hay errores en el formulario, vuelve a enviarlo por favor.</p>';
}

?>