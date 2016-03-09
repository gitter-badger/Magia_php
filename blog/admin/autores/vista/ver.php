<h1>Detalles</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="accion" value="editar"> 
     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
 <div class="form-group"> 
     <label for="id" class="col-sm-2 control-label">Id</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id" id="id" placeholder="Id" value="<?php echo $id; ?>"> 
     </div> 
   </div> 
  

 <div class="form-group"> 
     <label for="nombre" class="col-sm-2 control-label">Nombre</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>"> 
     </div> 
   </div> 
  

 <div class="form-group"> 
     <label for="apellidos" class="col-sm-2 control-label">Apellidos</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>"> 
     </div> 
   </div> 
  

 <div class="form-group"> 
     <label for="email" class="col-sm-2 control-label">Email</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>"> 
     </div> 
   </div> 
  

   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Editar</button> 
     </div> 
   </div>     
 </form> 
