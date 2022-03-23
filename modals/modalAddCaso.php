<div class="modal fade" id="addcaso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titulomodal">AÑADIR CASO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="casoCreate" name="casoCreate" method="POST">
                            <div class="form-group">
                                <div class="alert alert-primary" role="alert">
                                    Los campos con (*) son obligatorios
                                </div>
                                <label class="control-label">Solicitud</label>
                                <input class="form-control" id="solicitud" name="solicitud" type="text" placeholder="Nombre de la solicitud">
                             </div>
                            <div>
                                <label class="control-label">Proyecto</label>
                                <select class="form-control" id="pro" name="pro" type="text">
                                    <option>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Seleccione Proyecto</font>
                                        </font>
                                    </option>

                                    <?php
                                    foreach ($rawdata as $a) {
                                    ?>
                                        <option>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <?php echo $a["Proyecto"]; ?>
                                                </font>
                                            </font>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ciudad</label>
                                <select class="form-control" id="ciudad" name="ciudad" type="text">
                                    <option>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Seleccione la ciudad</font>
                                        </font>
                                    </option>

                                    <?php
                                    foreach ($ciudades as $c) {
                                    ?>
                                        <option>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <?php echo $c["municipio"]; ?>
                                                </font>
                                            </font>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="tile-body">
                                <label class="control-label">Fecha comite</label>
                                <input class="form-control" id="fechacomite" name="fechacomite" type="date" placeholder="Seleccionar fecha de comite">
                             </div>
                            <div class="form-group">
                                <label class="control-label">Entidad *</label>
                                <select class="form-control" id="entidad" name="entidad" type="text">
                                    <option>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Seleccione Entidad</font>
                                        </font>
                                    </option>

                                    <?php
                                    foreach ($entidad as $e) {
                                    ?>
                                        <option>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    <?php echo $e["entidad"]; ?>
                                                </font>
                                            </font>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Problema *</label>
                                <input class="form-control" id="problema" name="problema" type="text" placeholder="Agregar problema" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Descripcion del problema *</label>
                                <input class="form-control" id="Dproblema" name="Dproblema" type="text" placeholder="Descripción del problema" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Solicitante *</label>
                                <input class="form-control" id="solicitante" name="solicitante" type="text" placeholder="Agregar solicitante" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Correo solicitante *</label>
                                <input class="form-control" id="Csolicitante" name="Csolicitante" type="text" placeholder="Agregar correo del solicitante" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Responsable *</label>
                                <input class="form-control" id="responsable" name="responsable" type="text" placeholder="Agregar responsable" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Correo Responsable *</label>
                                <input class="form-control" id="Cresponsable" name="Cresponsable" type="text" placeholder="Agregar correo del responsable" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Prioridad</label>
                              <select class="form-control" id="prioridad" name="prioridad">
                                 <option>Selecciona nivel de prioridad</option>
                                 <option>Alta</option>
                                  <option>Media</option>
                                  <option>Baja</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Impacto HHPP *</label>
                                <input class="form-control" id="hhpp" name="hhpp" type="number" placeholder="Agregar impacto" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fecha de compromiso *</label>
                                <input class="form-control" id="fechaC" name="fechaC" type="date" placeholder="Agregar fecha de compromiso" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="btnCaso"><span id="btntext" class="bg-light"></span>Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>