<button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>

<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="operaciones/registrar_venta.php" method="POST">
                            
                           
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Serie de venta: </label>
                                <input type="text" name="serie" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Numero de venta: </label>
                                <input type="number" name="numero" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Fecha de venta: </label>
                                <input type="date" name="fecha" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Monto total: </label>
                                <input type="number" name="monto" class="form-control col-lg-4 col-md-4 col-sm-12" >
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">id cliente: </label>
                                <select name="id_cliente" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value=""></option>
                            <?php
                            $b_cliente = "SELECT * FROM cliente";
                            $r_b_cliente = mysqli_query($conexion, $b_cliente);
                            while ($datos_cliente = mysqli_fetch_array($r_b_cliente)) { ?>
                                <option value="<?php echo $datos_cliente["id"]; ?>"><?php echo $datos_cliente["ruc_dni"]; ?></option>
                            <?php } ?>
                        </select>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">id usuario: </label>
                                <select name="id_usuario" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value=""></option>
                            <?php
                            $b_usuario = "SELECT * FROM usuario";
                            $r_b_usuario = mysqli_query($conexion, $b_usuario);
                            while ($datos_usuario = mysqli_fetch_array($r_b_usuario)) { ?>
                                <option value="<?php echo $datos_usuario["id"]; ?>"><?php echo $datos_usuario["dni"]; ?></option>
                            <?php } ?>
                        </select>
                            </div>

                            <div class="form-group row">
                            <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                <button type="submit" class="btn btn-success">Guardar

                                </button>

                            </div>
                        </form>
                                         
                                                    
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>