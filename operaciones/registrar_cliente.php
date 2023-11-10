<?php
include ("../include/conexion.php");

//recibir informacion
$ruc = $_POST["dni"];
$razon_social = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$direccion = $_POST["direc"];
$direccion_envio = $_POST["direc_envio"];

//mostrar
//echo $dni. "<br>";
//echo $Apell_Nombre. "<br>";
//echo $correo. "<br>";
//echo $telefono. "<br>";
//echo $direccion. "<br>";
//echo $fecha. "<br>";



$consulta  = "INSERT INTO cliente (ruc_dni,razon_social,telefono,correo,direccion,direccion_envio) 
VALUES ('$ruc','$razon_social','$telefono','$correo,'$direccion','$direccion_envio')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Error en el Registro";
}
?>