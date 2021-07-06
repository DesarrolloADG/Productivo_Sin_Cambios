<?php echo $header;?>
<div class="right_col">
  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
    <div class="x_panel tile fixed_height_240">
      <div class="x_title">
        <br><br>
        <h1>Agregar Nueva Ubicación</h1>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form class="form-horizontal" id="add" action="/Ubicacion/ubicacionAdd" method="POST">
          <div class="form-group ">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="nombre" id="nombre" class="form-control col-md-7 col-xs-12" placeholder="Nombre de ubicaci&oacute;n">
              </div>
              <span id="availability"></span>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="status" id="status">
                  <option value="" disabled selected>Selecciona un estatus</option>
                  <?php echo $sStatus; ?>
                </select>
              </div>
            </div>

            <div class="form-group">
            <br>
              <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2 ">
                <button class="btn btn-danger col-md-3 col-sm-3 col-xs-3" type="button" id="btnCancel">Cancelar</button>
                <button class="btn btn-primary col-md-3 col-sm-3 col-xs-3" type="reset" >Resetear</button>
                <button class="btn btn-success col-md-3 col-sm-3 col-xs-3" type="submit" id="btnAdd">Agregar</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php echo $footer;?>
