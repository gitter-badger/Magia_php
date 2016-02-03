 <?php 
 $sql = "INSERT INTO relacionadas ( 
 id  ,  funcion  ,  funcion_relacionada  ) VALUES ( 
 :id  ,  :funcion  ,  :funcion_relacionada    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":funcion"=>"$funcion"  ,  ":funcion_relacionada"=>"$funcion_relacionada"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
