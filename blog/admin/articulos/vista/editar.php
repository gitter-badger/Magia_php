<h2><?php echo _t("Editar"); ?></h2>     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="articulos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
 <div class="form-group"> 
     <label for="id" class="col-sm-2 control-label">Id</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id" id="id" placeholder="Id" value="<?php echo $id; ?>"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="titulo" class="col-sm-2 control-label">Titulo</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $titulo; ?>"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contenido" class="col-sm-2 control-label">Contenido</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contenido" id="contenido" placeholder="Contenido" value="<?php echo $contenido; ?>"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="id_autor" class="col-sm-2 control-label">Id_autor</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="id_autor" id="id_autor" placeholder="Id_autor" value="<?php echo $id_autor; ?>"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="fecha" class="col-sm-2 control-label">Fecha</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha" value="<?php echo $fecha; ?>"> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="estatus" class="col-sm-2 control-label">Estatus</label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="estatus" id="estatus" placeholder="Estatus" value="<?php echo $estatus; ?>"> 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary">Editar</button> 
     </div> 
   </div>     
 </form> 
