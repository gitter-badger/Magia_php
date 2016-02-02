<h1>Extructura</h1>

<p>Te sugerimos que lo hagas con esta extrucutra</p>

www/magia/<br>
www/magia/<b><?php echo $path_magia_plugins; ?></b>/ <-- aca <br>
www/modelos<br>
www/magia/reg/request/<br>
www/magia/reg/vista/<br>

<hr>

<form class="form-horizontal" action="" method="get">
    <input type="hidden" name="a" value="config">
    
    
  <div class="form-group">
    <label for="path_magia_plugins" class="col-sm-4 control-label">Path de magia plugins</label>
    <div class="col-sm-4">
        <input type="text" name="path_magia_plugins" class="form-control" id="path_magia_plugins" placeholder="magia_plugins" value="<?php echo "$path_magia_plugins"; ?>">
    </div>
  </div>
    
    
   
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Editar</button>
    </div>
  </div>
    
    
</form>