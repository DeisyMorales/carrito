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
                                                <form action="operaciones/registrar_usuario.php" method="POST">

                                                <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">id cliente: </label>
                                <input type="number" name="fecha" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Fecha pedido: </label>
                                <input type="date" name="fecha" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Fecha entraga: </label>
                                <input type="date" name="fecha_entrega" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">metodo de pago: </label>
                                <input type="text" name="metodo" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">monto: </label>
                                <input type="number" name="monto" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">comprobante de pago: </label>
                                <input type="text" name="comprobante" class="form-control col-lg-4 col-md-4 col-sm-12" >
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Estado: </label>
                                <input type="text" name="estado" class="form-control col-lg-4 col-md-4 col-sm-12" >
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