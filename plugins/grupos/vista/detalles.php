<form class="form-horizontal" action="index.php" method="post">
    <input type="hidden" name="p" value="grupos">    
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="id_grupos" value="<?php echo $id_grupos?>">    
    
    
    <div class="form-group">
    <label for="id_grupo" class="col-sm-2 control-label">Id grupo</label>
    <div class="col-sm-10">
    <p class="form-control-static"><?php echo $id_grupo; ?></p>
    </div>
  </div>
  
  <div class="form-group">
    <label for="grupo" class="col-sm-2 control-label">Grupo</label>
    <div class="col-sm-10">
    <p class="form-control-static"><?php echo $grupo; ?></p>
    </div>
  </div>
  
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>    
</form>

