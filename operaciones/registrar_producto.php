<?php
include ("../include/conexion.php");

//recibir informacion
$codigo=$_POST["codigo"];
$descripcion=$_POST["descripcion"];
$detalle=$_POST["detalle"];
$categoria=$_POST["id_categoria"];
$precio_compra=$_POST["precio_venta"];
$stock=$_POST["stock"];
$estado=$_POST["estado"];
$precio_venta=$_POST["precio_compra"];


$nombre_archivo = $codigo.".jpg";
$ruta_imagen = "../img_usuarios/".$nombre_archivo;

$proveedor=$_POST["id_proveedor"];

echo $codigo. "<br>";
echo $descripcion. "<br>";
echo $detalle. "<br>";
echo $precio_venta. "<br>";
echo $stock. "<br>";
echo $estado. "<br>";
echo $precio_compra. "<br>";
echo $nombre_archivo. "<br>";



if (move_uploaded_file($_FILES['foto']['tmp_name'],$ruta_imagen))
    $consulta="INSERT INTO producto(codigo,descripcion,detalle,id_categoria,precio_compra,precio_venta,stock,estado,imagen,id_proveedor) 
    VALUES('$codigo','$descripcion','$detalle','$categoria','$precio_compra','$precio_venta','$stock','$estado','$nombre_archivo','$proveedor')";

    $ejecutar = mysqli_query($conexion,$consulta);
    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Error en el Registro";
    } 




?>