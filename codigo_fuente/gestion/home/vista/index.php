<div class="row">
    <div class="col-lg-6">
        <h2>Cambios Realizados</h2>
            
            <?php
        $fecha = "06-12-2015";
        ?>

        <ul>
            <li>
                <?php echo fecha_larga($fecha); ?><br>
                Hacer una diferenciacion de diferentes tipos de contacto en la parte de gestion
            </li>
        </ul>
        
        <h2>Cambios aceptados</h2>
        <ul>
            <li>
                <?php echo fecha_larga($fecha); ?><br>
                Hola
            </li>
        </ul>
        <h2>Cambios solicitados</h2>
        <ul>
            <li>
                
                Llene el formulario de la derecha
            </li>
        </ul>
        
        
        
    </div>
    <div class="col-lg-6">
        <h2>Solicitar cambio</h2>
    

        
        
        
<form class="form-horizontal">
    
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Solicita</label>
    <div class="col-sm-10">
        <input type="text" name="solicita" class="form-control" id="solicita" placeholder="Quién solicita">
    </div>
  </div>
    
    
  <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Sector</label>
      <div class="col-sm-10">
          <select class="form-control" name="sector">
              <option>Público</option>
              <option>Gestión</option>
          </select>
    </div>
  </div>
    
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Descripcion corta</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    
    
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Descripcion Larga</label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="3" placeholder="Si es necesario"></textarea>
    </div>
  </div>
    
    
    
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
    
    
    
</form>   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
    </div>
</div>