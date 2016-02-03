 <?php 
 $sql = "INSERT INTO usuarios ( 
 id_usuario  ,  nombres  ,  email  ,  estatus  ) VALUES ( 
 :id_usuario  ,  :nombres  ,  :email  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_usuario"=>"$id_usuario"  ,  ":nombres"=>"$nombres"  ,  ":email"=>"$email"  ,  ":estatus"=>"$estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
