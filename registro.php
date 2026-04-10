<?php

/* 
Este archivo guarda usuarios en un archivo local (simulación de base de datos)
*/

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];

/* Guardar datos en archivo */
$archivo = fopen("usuarios.txt", "a");

fwrite($archivo, $nombre . "," . $correo . "," . $password . "\n");

fclose($archivo);

echo "Usuario registrado correctamente.";

?>