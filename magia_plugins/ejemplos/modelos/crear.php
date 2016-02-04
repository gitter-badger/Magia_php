 <?php 
 $sql = "INSERT INTO ejemplos ( 
 id  ,  funcion  ,  ejemplo  ) VALUES ( 
 :id  ,  :funcion  ,  :ejemplo    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":funcion"=>"$funcion"  ,  ":ejemplo"=>"$ejemplo"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
