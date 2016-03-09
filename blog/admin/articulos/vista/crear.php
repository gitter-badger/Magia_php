<h2><?php echo _t("Nuevo articulos"); ?></h2> 
<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="articulos"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 
     <div class="form-group"> 
     <label for="id" class="col-sm-2 control-label">Id</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id" id="id" placeholder="Id"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="titulo" class="col-sm-2 control-label">Titulo</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="contenido" class="col-sm-2 control-label">Contenido</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contenido" id="contenido" placeholder="Contenido"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="id_autor" class="col-sm-2 control-label">Id_autor</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id_autor" id="id_autor" placeholder="Id_autor"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="fecha" class="col-sm-2 control-label">Fecha</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha"> 
     </div> 
   </div> 


     <div class="form-group"> 
     <label for="estatus" class="col-sm-2 control-label">Estatus</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="estatus" id="estatus" placeholder="Estatus"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Registrar</button> 
     </div> 
   </div> 
 </form> 
