 <?php 
 $sql = "INSERT INTO cambios ( 
 id  ,  funcion  ,  version  ,  descripcion  ) VALUES ( 
 :id  ,  :funcion  ,  :version  ,  :descripcion    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":funcion"=>"$funcion"  ,  ":version"=>"$version"  ,  ":descripcion"=>"$descripcion"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
