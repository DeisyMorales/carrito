<?php
include("../include/conexion.php");
//recibir la informacion

$serie_venta=$_POST['serie'];
$numero_venta=$_POST['numero'];
$fecha_hora=$_POST['fecha'];
$monto_total=$_POST['monto'];
$id_cliente=$_POST['id_cliente'];
$id_usuario=$_POST['id_usuario'];

echo $serie_venta. "<br>";
echo $numero_venta. "<br>";
echo $fecha_hora. "<br>";
echo $monto_total. "<br>";
echo $id_cliente. "<br>";
echo $id_usuario. "<br>";



$consulta ="INSERT INTO ventas(serie_venta,numero_venta,fecha_hora_venta,monto_total,id_cliente,id_usuario)
VALUES ('$serie_venta','$numero_venta','$fecha_hora','$monto_total','$id_cliente','$id_usuario')";

$ejecutar= mysqli_query($conexion,$consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";
}



