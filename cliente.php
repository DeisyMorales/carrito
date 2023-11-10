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
                    <h4 class="">Registro de Cliente</h4>
                    <div class="card">
                        <div class="card-body">
                        <form action="operaciones/registrar_cliente.php" method="post">


                        <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">ruc_dni :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="ruc" required>

                            </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Razon Social</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="nombre" required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Correo:</label>
                                <input type="email"class="form-control col-lg-10 col-md-10 col-sm-12"  name="correo" required>

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Telefono :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono" required>

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion:</label>
                                <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="direccion" required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion de Envio</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="envio" required>

                            </div>


                    

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for=""></label>
                                <button type="submit" class="btn  btn-success ">Guardar</button>

                            </div>

                      
                      


                        </form>
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