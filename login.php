<?php

/* 
Este archivo recibe los datos del formulario
y simula una validación de usuario.
*/

$correo = $_POST['correo'];
$password = $_POST['password'];

/* Usuario de prueba */
$usuario_correcto = "admin@gmail.com";
$password_correcta = "1234";

/* Validación */
if($correo == $usuario_correcto && $password == $password_correcta){
    echo "Bienvenido, usuario autenticado correctamente.";
}else{
    echo "Error: datos incorrectos.";
}

?>