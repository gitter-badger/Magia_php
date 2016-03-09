 <?php 
 $sql = "INSERT INTO articulos ( 
 id  ,  titulo  ,  contenido  ,  id_autor  ,  fecha  ,  estatus  ) VALUES ( 
 :id  ,  :titulo  ,  :contenido  ,  :id_autor  ,  :fecha  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":titulo"=>"$titulo"  ,  ":contenido"=>"$contenido"  ,  ":id_autor"=>"$id_autor"  ,  ":fecha"=>"$fecha"  ,  ":estatus"=>"$estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
