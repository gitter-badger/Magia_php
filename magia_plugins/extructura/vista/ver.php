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
     <label for="descripcion" class="col-sm-2 control-label">descripcion</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="<?php echo descripcion; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="valor_entrega" class="col-sm-2 control-label">valor_entrega</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="valor_entrega" id="valor_entrega" placeholder="valor_entrega" value="<?php echo valor_entrega; ?>"> 
     </div> 
   </div> 
 <div class="form-group"> 
     <label for="errores" class="col-sm-2 control-label">errores</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="errores" id="errores" placeholder="errores" value="<?php echo errores; ?>"> 
     </div> 
   </div> 
   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Edit</button> 
     </div> 
   </div>     
 </form> 
