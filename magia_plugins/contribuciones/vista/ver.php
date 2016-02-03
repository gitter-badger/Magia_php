     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="accion" value="editar"> 
     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
 <div class="form-group"> 
     <label for="id" class="col-sm-2 control-label">id</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id" id="id" placeholder="id" value="<?php echo id; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="funcion" class="col-sm-2 control-label">funcion</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="funcion" id="funcion" placeholder="funcion" value="<?php echo funcion; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="id_usuario" class="col-sm-2 control-label">id_usuario</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id_usuario" id="id_usuario" placeholder="id_usuario" value="<?php echo id_usuario; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="contribucion" class="col-sm-2 control-label">contribucion</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contribucion" id="contribucion" placeholder="contribucion" value="<?php echo contribucion; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="fecha" class="col-sm-2 control-label">fecha</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="fecha" id="fecha" placeholder="fecha" value="<?php echo fecha; ?>"> 
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
