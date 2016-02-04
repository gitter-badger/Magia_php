 <?php 
 $sql = "INSERT INTO extructura ( 
 id  ,  funcion  ,  descripcion  ,  valor_entrega  ,  errores  ) VALUES ( 
 :id  ,  :funcion  ,  :descripcion  ,  :valor_entrega  ,  :errores    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":funcion"=>"$funcion"  ,  ":descripcion"=>"$descripcion"  ,  ":valor_entrega"=>"$valor_entrega"  ,  ":errores"=>"$errores"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
