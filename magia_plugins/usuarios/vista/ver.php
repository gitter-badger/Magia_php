     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="accion" value="editar"> 
     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
 <div class="form-group"> 
     <label for="id_usuario" class="col-sm-2 control-label">id_usuario</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id_usuario" id="id_usuario" placeholder="id_usuario" value="<?php echo id_usuario; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="nombres" class="col-sm-2 control-label">nombres</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="nombres" id="nombres" placeholder="nombres" value="<?php echo nombres; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="email" class="col-sm-2 control-label">email</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo email; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="estatus" class="col-sm-2 control-label">estatus</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="estatus" id="estatus" placeholder="estatus" value="<?php echo estatus; ?>"> 
     </div> 
   </div> 
   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Edit</button> 
     </div> 
   </div>     
 </form> 
