<?php
include ("../include/conexion.php");

//recibir informacion
$ruc = $_POST['ruc'];
$Razon_Social = $_POST['razon'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$Pago = $_POST['pago'];

echo $ruc. "<br>";
echo $Razon_Social. "<br>";
echo $email. "<br>";
echo $telefono. "<br>";
echo $direccion. "<br>";
echo $Pago. "<br>";


$consulta="INSERT INTO proveedor(ruc,razon_social,correo,telefono,direccion,metodo_pago) 
VALUES('$ruc','$Razon_Social','$email','$telefono','$direccion','$Pago')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Error en el Registro";
}
?>