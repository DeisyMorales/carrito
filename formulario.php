<?php
include("include/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php 
    // Lenguaje en php
    include("include/menu.php");

    ?>

    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <?php include("include/modal_fm_reg_usu.php");?>
                        <h4>Relacion de Usuario</h4>
                        <div class="card">
                            <div class="card-body">
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nº</th>
                                            <th>FOTO</th>
                                            <th>DNI</th>
                                            <th>APELLIDOS Y NOMBRES</th>
                                            <th>CORREO</th>
                                            <th>TELEFONO</th>
                                            <th>DIRECCION</th>
                                            <th>ESTADO</th>
                                            <th>ROL</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $consulta="SELECT u.foto,u.dni,u.apellidos_nombres,u.correo,u.telefono,u.direccion,u.activo,r.nombre FROM usuario u INNER JOIN roles r ON u.id_rol=r.id";
                                        $ejecutar = mysqli_query($conn, $consulta);
                                        $contador=0;
                                        while ($respuesta = mysqli_fetch_array($ejecutar)) {
                                            $contador +=1;
                                            echo "<tr>";
                                            
                                            echo "<td>".$contador."</td>";
                                            echo "<td>".$respuesta['foto']."</td>";
                                            echo "<td>".$respuesta['dni']."</td>";
                                            echo "<td>".$respuesta['apellidos_nombres']."</td>";
                                            echo "<td>".$respuesta['correo']."</td>";
                                            echo "<td>".$respuesta['telefono']."</td>";
                                            echo "<td>".$respuesta['direccion']."</td>";
                                            echo "<td>".$respuesta['activo']."</td>";
                                            echo "<td>".$respuesta['nombre']."</td>";/*id_rol*/ 
                                            echo "<td><button class='btn btn-success'>Editar</button>  <button class='btn btn-success'>Eliminar</button></td>";


                                            echo "</tr>";
                                            
                                        }



                                        ?>
                              
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- FIN DE CONTENIDO -->


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>