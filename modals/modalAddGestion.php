<div class="modal fade" id="addgestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titulomodal">AÑADIR GESTION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="gestionCreate" name="gestionCreate" method="POST">
                            <div class="form-group">
                                <div class="alert alert-primary" role="alert">
                                    Los campos con (*) son obligatorios
                                </div>
                                <input type="hidden" name="idGestion" id ="idGestion" readonly>
                            </div> 
                            <div class="form-group">
                                <label class="control-label">Porcentaje *</label>
                                <input class="form-control" id="porcentaje" name="porcentaje" type="text" placeholder="Porcentaje de gestión">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fecha de avance *</label>
                                <input class="form-control" id="fechavance" name="fechavance" type="date" placeholder="Seleccionar fecha de avance">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Descripción de gestión *</label>
                                <input class="form-control" id="dgestion" name="dgestion" type="text" placeholder="Descripción de la gestión" required>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="btnGestionadd"><span id="btntext" class="bg-light"></span>Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>