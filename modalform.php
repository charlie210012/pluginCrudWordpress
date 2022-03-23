<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titulomodal">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <div class="tile">
            <div class="tile-body">
              <form id ="snuevo1" name ="snuevo1"  method ="POST">
                 <input class="form-control" id="id" name ="id" type="text" placeholder="id" readonly="">
                <div class="tile-body">
                  <label class="control-label">Fecha</label>
                  <input class="form-control" id="demoDate1" name="demoDate1" type="text" placeholder="Seleccionar fecha">
                  </div>
                <div class="form-group">
                  <label class="control-label">Cantidad</label>
                  <input class="form-control" id="cantidad1" name="cantidad1" type="text" placeholder="Escriba la cantidad de prado">
                </div>
                <div class="form-group">
                  <label class="control-label">Manga</label>
                  <input class="form-control" id ="manga1" name="manga1" type="text" placeholder="De que manga viene?" >
                </div>
                <div class="form-group">
                  <label class="control-label">Costo</label>
                  <select class="form-control" id="costoprado1" name="costoprado1">
                     <option>2600</option>
                      <option>2700</option>
                      <option>1700</option>
                      <option>2800</option>
                      <option>2900</option>
                      <option>4000</option>
                      <option>3200</option>
                      <option>3500</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Tipo de Prado</label>
                    <select class="form-control" id="tipoprado1" name ="tipoprado1">
                      <option>Trenza</option>
                      <option>Esmeralda</option>
                      <option>Gateadora</option>
                      <option>Chino</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label class="control-label">Obra</label>
                  <select class="form-control" id="obra1" name ="obra1" type = "text">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione Obra</font></font></option>
                    <?php require 'conexion.php';

                    $consulta1 = mysqli_query($conexion,"(SELECT * FROM `Obras` ORDER BY `nombreobra` ASC)");
                     while ($Resultados = mysqli_fetch_array($consulta1)){ ?>
                     
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $Resultados['nombreobra']?></font></font></option>
                      <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Cantidad Gestionada</label>
                  <input class="form-control" id = "cantidadg1" name = "cantidadg1" type="text" placeholder="Cuanto de ese prado se gestiono?">
                </div>
                <div class="form-group">
                  <label class="control-label">Costo Gestión</label>
                  <select class="form-control" id="costogestion1" name="costogestion1">
                      <option>900</option>
                      <option>1000</option>
                      <option>1050</option>
                      <option>1100</option>
                      <option>1200</option>
                      <option>1300</option>
                      <option>1400</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Proveedor</label>
                  <select class="form-control" id="proveedor1" name ="proveedor1" type = "text">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione Proveedor</font></font></option>
                    <?php require 'conexion.php';

                    $consulta1 = mysqli_query($conexion,"(SELECT * FROM `ingreproveedor` ORDER BY `nombre` ASC)");
                     while ($Resultados = mysqli_fetch_array($consulta1)){ ?>
                     
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $Resultados['nombre']?></font></font></option>
                      <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Trabajador</label>
                  <select class="form-control" id="trabajador1" name ="trabajador1" type = "text">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione Trabajador</font></font></option>
                    <?php require 'conexion.php';

                    $consulta1 = mysqli_query($conexion,"(SELECT * FROM `Trabajadores` ORDER BY `trabajador` ASC)");
                     while ($Resultados = mysqli_fetch_array($consulta1)){ ?>
                     
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $Resultados['trabajador']?></font></font></option>
                      <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Proceso Proveedor</label>
                  <select class="form-control" id="procesop" name="procesop">
                      <option>Pagado</option>
                      <option>No pagado</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Proceso Trabajador</label>
                  <select class="form-control" id="procesot" name="procesot">
                      <option>Pagado</option>
                      <option>No pagado</option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id ="btnz"><span id ="btntext" ></span>Actualizar</button>
                </div>
              </form>
            </div>
          </div>
      </div>
      
    </div>
  </div>
</div>

