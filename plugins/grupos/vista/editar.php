    <form class="form-horizontal" method="" action="">
    <input type="hidden" name="id_usuario" value="<?php echo $id_grupo; ?>">

<div class="form-group">
    <label for="id_grupo" class="col-sm-2 control-label">Id grupo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_grupo" id="id_grupo" placeholder="Id grupo" value="<?php echo $id_grupo; ?>">
    </div>
  </div>
  
  <input type="hidden" name="id_usuario" value="<?php echo $grupo; ?>">

<div class="form-group">
    <label for="grupo" class="col-sm-2 control-label">Grupo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="grupo" id="grupo" placeholder="Grupo" value="<?php echo $grupo; ?>">
    </div>
  </div>
  
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>    
</form>

