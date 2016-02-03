 <?php 
 $sql = "INSERT INTO parametros ( 
 id  ,  funcion  ,  parametro  ,  descripcion  ) VALUES ( 
 :id  ,  :funcion  ,  :parametro  ,  :descripcion    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":funcion"=>"$funcion"  ,  ":parametro"=>"$parametro"  ,  ":descripcion"=>"$descripcion"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
