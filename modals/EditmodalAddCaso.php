<div class="modal fade" id="editcaso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titulomodal">ACTUALIZAR CASO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="casoEdit" name="casoEdit" method="POST">
                            <div class="form-group">
                                <div class="alert alert-primary" role="alert">
                                    Los campos con (*) son obligatorios
                                </div>
                                <label class="control-label">Solicitud</label>
                                <input class="form-control" id="Esolicitud" name="Esolicitud" type="text" placeholder="Nombre de la solicitud">
                             </div>
                            <div>
                                <label class="control-label">Proyecto</label>
                                <select class="form-control" id="Epro" name="Epro" type="text">
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
                                <select class="form-control" id="Eciudad" name="Eciudad" type="text">
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
                                <input class="form-control" id="Efechacomite" name="Efechacomite" type="date" placeholder="Seleccionar fecha de comite">
                             </div>
                            <div class="form-group">
                                <label class="control-label">Entidad *</label>
                                <select class="form-control" id="Eentidad" name="Eentidad" type="text">
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
                                <input class="form-control" id="Eproblema" name="Eproblema" type="text" placeholder="Agregar problema" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Descripcion del problema *</label>
                                <input class="form-control" id="EDproblema" name="EDproblema" type="text" placeholder="Descripción del problema" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Solicitante *</label>
                                <input class="form-control" id="Esolicitante" name="Esolicitante" type="text" placeholder="Agregar solicitante" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Correo solicitante *</label>
                                <input class="form-control" id="ECsolicitante" name="ECsolicitante" type="text" placeholder="Agregar correo del solicitante" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Responsable *</label>
                                <input class="form-control" id="Eresponsable" name="Eresponsable" type="text" placeholder="Agregar responsable" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Correo Responsable *</label>
                                <input class="form-control" id="ECresponsable" name="ECresponsable" type="text" placeholder="Agregar correo del responsable" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Prioridad</label>
                              <select class="form-control" id="Eprioridad" name="Eprioridad">
                                 <option>Selecciona nivel de prioridad</option>
                                 <option>Alta</option>
                                  <option>Media</option>
                                  <option>Baja</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Impacto HHPP *</label>
                                <input class="form-control" id="Ehhpp" name="Ehhpp" type="number" placeholder="Agregar impacto" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fecha de compromiso *</label>
                                <input class="form-control" id="EfechaC" name="EfechaC" type="date" placeholder="Agregar fecha de compromiso" required>
                            </div>
                            <input type="hidden" name="id" id ="id" readonly>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="btnEditarCaso"><span id="btntext" class="bg-light"></span>Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>