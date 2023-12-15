<?php
$lista=array('alfredo','yul','mel','willian','Stewar','mayte','deisy','raul','zamira','bruno','rosilda','yerson','denis','Aron','magaly');
$contar= count($lista);
print_r($lista);



array_push($lista, "deysi");


/*
$contar= count($lista);
for ($i=0;$i <= $contar; $i++) {
    echo $lista[$i]."<br>";
   
} 
*/
$lista2= array('alfredo'=>40,'yul'=>39);

print_r($lista2);

include('include/conexion.php');



$consulta="SELECT * FROM producto";
$ejecutar= mysqli_query($conexion, $consulta);
while ($r_ejecutar = mysqli_fetch_array($ejecutar)) {
   $lista3[$r_ejecutar['id']]= $r_ejecutar['descripcion'];
   
}

print_r($lista3);







?>