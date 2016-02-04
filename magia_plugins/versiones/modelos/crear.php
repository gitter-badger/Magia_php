 <?php 
 $sql = "INSERT INTO versiones ( 
 id  ,  version  ,  nombre  ) VALUES ( 
 :id  ,  :version  ,  :nombre    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id"=>"$id"  ,  ":version"=>"$version"  ,  ":nombre"=>"$nombre"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
