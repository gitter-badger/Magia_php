<h2><?php echo _t("Nuevo autores"); ?></h2> 
<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="autores"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 
     <div class="form-group"> 
     <label for="id" class="col-sm-2 control-label">Id</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id" id="id" placeholder="Id"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="nombre" class="col-sm-2 control-label">Nombre</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="apellidos" class="col-sm-2 control-label">Apellidos</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="email" class="col-sm-2 control-label">Email</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="email" id="email" placeholder="Email"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Registrar</button> 
     </div> 
   </div> 
 </form> 
