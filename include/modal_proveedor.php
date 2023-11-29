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
                                                <form action="operaciones/registrar_proveedor.php" method="POST">
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Ruc: </label>
                                <input type="number" name="ruc" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Razon social: </label>
                                <input type="text" name="razon" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Email: </label>
                                <input type="email" name="email" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">telefono: </label>
                                <input type="number" name="telefono" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Direccion: </label>
                                <input type="text" name="direccion" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Metodo de pago: </label>
                                <input type="text" name="pago" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
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