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
     <label for="version" class="col-sm-2 control-label">version</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="version" id="version" placeholder="version" value="<?php echo version; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="descripcion" class="col-sm-2 control-label">descripcion</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="<?php echo descripcion; ?>"> 
     </div> 
   </div> 
   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Edit</button> 
     </div> 
   </div>     
 </form> 
