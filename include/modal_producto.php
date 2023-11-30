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
                                                <form action="operaciones/registrar_producto.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">codigo: </label>
                                <input type="number" name="codigo" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Descripcion: </label>
                                <input type="text" name="descripcion" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Detalle : </label>
                                <input type="text" name="detalle" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">id categoria : </label>
                                <input type="number" name="id_categoria" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">Precio compra: </label>
                                <input type="number" name="precio_compra" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">precio venta : </label>
                                <input type="number" name="precio_venta" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>                                                                                                       
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Stock: </label>
                                <input type="number" name="stock" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Estado: </label>
                                <input type="number" name="estado" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">imagen: </label>
                                <input type="file" name="foto" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                require accept="image/*">
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12">id proveedor: </label>
                                <input type="number" name="id_proveedor" class="form-control col-lg-4 col-md-4 col-sm-12" 
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