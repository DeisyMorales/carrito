<?php
//validar datos 
$servidor ="localhost";
$db ="carrito_venta";
$usuario ="root";
$password ="root";

$conexion = mysqli_connect($servidor, $usuario, $password, $db);

//verificar la conexion
if (!$conexion) {

   echo "conexion fallida";
} 

?>
