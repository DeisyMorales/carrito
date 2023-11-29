<?php
include("include/conexion.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css" >
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>


<?php 
//lenguaje en php
include ("include/menu.php");
?>

<!--Inicio de Contenido-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <?php include("include/modal_from_reg_cliente.php");?>
                    <h4 class="">Registro de Cliente</h4>
                    <div class="card">
                        <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>ruc_dni :</th>
                                        <th>Razon Social</th>
                                        <th>Correo:</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Direccion de Envio</th>
                                        

                                    </tr>
                                    <tbody>
                                    <?php
                                        $consulta ="SELECT * FROM cliente";
                                        $ejecutar =mysqli_query($conexion,$consulta);
                                        $contador =0;
                                        while ($respuesta =mysqli_fetch_array($ejecutar)) {
                                            # code...
                                            $contador += 1;
                                            echo "<tr>";
                                            echo "<td>".$contador."</td>";
                                            echo "<td>".$respuesta['ruc_dni']."</td>";
                                            echo "<td>".$respuesta['razo_social']."</td>";
                                            echo "<td>".$respuesta['telefono']."</td>";
                                            echo "<td>".$respuesta['correo']."</td>";
                                            echo "<td>".$respuesta['direccion']."</td>";
                                            echo "<td>".$respuesta['direccion_envio']."</td>";
                                            echo "<td><button class='btn bnt-success'>Editar</button><button class='btn btn-success'</td>";
                                            
                                            echo "</tr>";
                                        }
                                        
                                        
                                        ?>
                                    
                                      

                                    </tbody>
                                </thead>
                            </table>



                        
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Fin de Contenido-->



     <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>
</html>